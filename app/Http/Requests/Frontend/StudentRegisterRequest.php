<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class StudentRegisterRequest extends FormRequest
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
            'rollno'=>'required',
            'name' =>'required',
            'phone'=>'required',
            'email' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'nrc' => 'required',
            'fname' => 'required',
            'fpro' => 'required',
            'mname' => 'required',
            'mpro' => 'required',
            'pphone' => 'required',
            'image'=>'required'
        ];
    }
}
