<?php

namespace App\Http\Requests\Msg;

use Illuminate\Foundation\Http\FormRequest;

class RensFormRequest extends FormRequest
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
            'sujet'       => ['required', 'string', 'max:30'],
            'msg'       => ['required'],
        ];
    }

     public function messages()
    {
        return [
        'required'    =>'Cette saisie est obligatoire',
        'min'         =>'Votre saisie doit obligatoirement avoir plus de :min caractères',
        'max'         =>'Votre saisie ne doit pas avoir plus de :max caractères',
        ];
        
    }
}
