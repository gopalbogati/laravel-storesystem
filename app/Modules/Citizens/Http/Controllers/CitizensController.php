<?php

namespace App\Modules\Citizens\Http\Controllers;

use App\Modules\Citizens\Models\Citizen;
use Auth;
use App\Http\Controllers\Controller;
use App\Modules\Citizens\Http\Requests\CitizenFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Image;
use Flash;


class CitizensController extends Controller
{

    protected $citizen;

    public function __construct(Citizen $citizens)
    {
        $this->middleware('auth');
        $this->citizen = $citizens;
    }

    /*public function sortData(Request $request)
    {

        $citizens = Citizen::all()->paginate('8');
        return View('citizens::information.list', compact('citizens'));


    }*/


    function createForm()
    {

        return view('citizens::information.create');
    }

    function formInsert(CitizenFormRequest $request)
    {
        $input = $request->all();
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $imageName = $file->getClientOriginalName();
            $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);
            $file->move(public_path() . '/uploads', $fileName);
            $input['image'] = $fileName;
        } else {
            $input['image'] = '';
        }


        if (Citizen::create($input)) {
            Session::flash('success', 'The information is successfully saved ');
            // return view('citizens::information.list');
            return redirect()->route('citizens::listinformation');
        }
    }

    function listDetails(Request $request)
    {
        $order = $request->get('order', 'desc');
        $attr = $request->get('attr', 'id');
        if (empty($order)) {
            $order = 'asc';
        }
        if (empty($attr)) {
            $attr = 'name';
        }
        $citizens = Citizen::orderBy($attr, $order)->paginate(3);
        $order = ($order == 'desc') ? 'asc' : 'desc';

        return view('citizens::information.list', ['citizens' => $citizens, 'order' => $order, 'attr' => $attr]);
    }

    function editDetails(Citizen $citizen)
    {
        return view('citizens::information.edit', ['citizen' => $citizen]);

    }

    function search(Request $request)
    {

        $query = $request->get('q');
        $citizens = Citizen::where('name', 'like', "%$query%")->orderBy('name', 'asc')->paginate(3);
        return view('citizens::information.list', ['citizens' => $citizens]);
        // DB::table('citizens')->count();

    }

    function updateDetails(Request $request, Citizen $citizen)
    {
        $input = $request->all();
        $file = $request->file('image');

        if ($request->hasFile('image')) {

            $imageName = $file->getClientOriginalName();
            $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);
            $file->move(public_path() . '/uploads', $fileName);
            $input['image'] = $fileName;

        } else {
            $input['image'] = $input['old_image'];
        }

        $citizen->update($input);
        return redirect()->route('citizens::listinformation');

    }

    public function deleteDetails($citizen)
    {
        $task = Citizen::findOrFail($citizen);

        if ($task->delete()) {

            Session::flash('success', 'The information is successfully deleted');

            return redirect()->route('citizens::listinformation');
        }

    }

    public function destroy(Request $request)
    {
        $ids = $request->all();


        try {

            if ($request->has('toDelete')) {

                $this->citizen->destroy($ids['toDelete']);

                Session::flash('success', 'The data is successfully deleted');

            } else {

                return redirect()->route('citizens::listinformation')->with('message', 'Please select at least one to delete');
            }


        } catch (Exception $e) {

            Flash::error($e->getMessage());
        }
        return redirect(route('citizens::listinformation'));
    }


}
