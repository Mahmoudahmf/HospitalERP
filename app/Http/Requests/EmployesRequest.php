<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployesRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            'name' => 'required',
            'username' => 'required|starts_with:em_|unique:h_employees,username,'.$this->emp_id,
            'password'=>'required|string|min:6|max:10',
            'title'=>'required|string',
        ];
    }
}
