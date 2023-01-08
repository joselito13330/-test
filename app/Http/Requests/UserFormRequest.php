<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
           'name'       => 'required | unique:users',
           'email'      => 'required',
           'role'       => 'required',
           'password'  => 'required',
        ];
    }

    public function messages()
    {
        return [
        'required'    =>'Cette saisie est obligatoire',
        'unique'      =>'Cet enregistrement existe déjà !',
        ];
        
    }
}