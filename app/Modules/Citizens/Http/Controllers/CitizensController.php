<?php

namespace App\Modules\Citizens\Http\Controllers;

use App\Modules\Citizens\Models\Citizen;
use Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Modules\Citizens\Http\Requests\CitizenFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Image;

class CitizensController extends Controller
{
    function createForm()
    {
        return view('citizens::information.create');
    }

    function formInsert(CitizenFormRequest $request)
    {
        $input = $request->all();
        $file = $request->file('image');
        $imageName = $file->getClientOriginalName();
        $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);
        $file->move(public_path() . '/uploads', $fileName);
        $input['image'] = $fileName;
        if (Citizen::create($input)) {
            Session::flash('success', 'The information is successfully saved ');
            // return view('citizens::information.list');
            return redirect()->route('citizens::listinformation');
        }
    }

    function listDetails()
    {
        $citizens = Citizen::paginate(4);
        return view('citizens::information.list', ['citizens' => $citizens]);
    }

    function editDetails(Citizen $citizen)
    {
        return view('citizens::information.edit', ['citizen' => $citizen]);

    }

    function updateDetails(Request $request, Citizen $citizen)
    {
        $citizen->update($request->all())->with();

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


}
