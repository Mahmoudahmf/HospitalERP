<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class NursesRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            
            'name' => 'required',
            'username' => 'required|starts_with:nr_|unique:h_nurses,username,'.$this->nurse_id,
            'password'=>'required|string|min:6|max:10',
            'title'=>'required|string',
            'department'=>'required',
        ];
    }

    public function messages()
    {
        return [
           
            'required' => 'Field required',
            'unique' => 'Usename Already Exists',
        ];
    }
   
   
}
