<?php

namespace App\Http\Requests\Msg;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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

   
    public function rules()
    {
        return [
            'nom'       => ['required', 'string'],
            'prenom'    => ['required', 'string'],
            'email'     => ['required', 'string', 'email'],
            'msg'       => ['required'],
        ];
    }

     public function messages()
    {
        return [
        'required'    =>'Cette saisie est obligatoire',
        'min'         =>'Votre saisie doit obligatoirement avoir plus de :min caractères',
        'max'         =>'Votre saisie ne doit pas avoir plus de :max caractères',
        'email'       => 'Votre saisie doit être du format mail',
        ];
        
    }
}
