<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateFormRequestLoginAdmin extends FormRequest
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
            'email'=>'required|email',
            'password'=>'required|min: 4',
        ];
    }

    public function messages(){
        return [
            'email.required' => 'Le champ mail est requis',
            'email.email' => 'Le mail n\'est pas correct',
            'password.required' => 'Le champ mot de passe est requis',
            'password.min' => 'Le mot de passe doit au moin contenir 4 caractères'
        ];
    }
}
