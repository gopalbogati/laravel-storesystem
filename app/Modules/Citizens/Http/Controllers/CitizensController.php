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

    public function __construct(Citizen $citizen)
    {
        $this->middleware('auth');
        $this->citizen = $citizen;
    }

    public function index(Request $request)
    {
        {
            $filter['name'] = $request->get('q');
            $sort['sort'] = $request->get('sort', 'desc');
            $sort['by'] = $request->get('key', 'id');

            $citizens = $this->citizen->findAll(8, $filter, $sort, [0, 1]);
            $citizens->appends(['q' => $filter['name']]);

            $sort = ($sort['sort'] == 'desc') ? 'asc' : 'desc';

            return View('citizens::information.list', compact('citizens', 'sort'));
        }

    }

    public function findAll($limit = 12, $filter = [], $sort = ['by' => 'id', 'sort' => 'DESC'], $status = [0, 1])
    {
        $result = Citizen::when(array_keys($filter, true), function ($query) use ($filter) {
            $query->where('name', 'like', '%' . $filter['name'] . '%');
            return $query;
        })
            ->orderBy($sort['by'], $sort['sort'])
            ->paginate(env('DEF_PAGE_LIMIT', $limit));


        return $result;

    }


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

    function listDetails()
    {
        $citizens = Citizen::orderBy('name', 'asc')->paginate(3);
        return view('citizens::information.list', ['citizens' => $citizens]);
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
