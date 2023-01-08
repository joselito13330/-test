<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DocumentFormRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
           'titre'      => 'required | unique:documents',
           'auteur'     => 'required',
           'category'   => 'required',
           'langue'     =>'required',
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

