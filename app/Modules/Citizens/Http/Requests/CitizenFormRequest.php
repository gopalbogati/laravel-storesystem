<?php

namespace App\Modules\Citizens\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
//use App\Http\Requests\request;

class CitizenFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:30',
            'dob' => 'required',
            'age' =>'required',
            'father_name' =>'required',
            'mother_name' =>'required',
            'grandfather_name' =>'required',
            'permanent_address' =>'required',
            //'image' =>'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' =>'required',


        ];
    }
}
