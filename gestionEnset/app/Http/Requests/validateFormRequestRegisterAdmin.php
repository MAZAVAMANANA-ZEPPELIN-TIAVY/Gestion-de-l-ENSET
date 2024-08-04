<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateFormRequestRegisterAdmin extends FormRequest
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
            'lastname'=>'required',
            'firstname'=>'required',
            'contact'=>'required',
            'email'=>'required|email',
            'dateOfBirthDay'=>'required',
            'address'=>'required|min: 4',
            'gender'=>'required',
            'nationality'=>'required',
            'password'=>'required|min: 4',
            'confirmPassword'=>'required|min: 4',
        ];
    }

    public function messages(){
        return [
            'lastname.required' => 'Le champ nom est requis!',
            'firstname.required' => 'Le champ prénom(s) est requis!',
            'contact.required' => 'Le champ contacte est requis!',
            'password.min' => 'Le mot de passe doit au moin contenir 4 caractères!',
            'email.required' => 'Le champ mail est requis!',
            'email.email' => 'Le mail n\'est pas correct!',
            'dateOfBirthDay.required' => 'Le champ date de naissance est requis!',
            'address.required' => 'Le champ adresse est requis!',
            'address.min' => 'L\'adresse doit au moin contenir 4 caractères!',
            'gender.required' => 'Le champ genre est requis!',
            'nationality.required' => 'Le champ Nationalité est requis!',
            'password.required' => 'Le champ mot de passe est requis!',
            'password.min' => 'Le mot de passe doit au moin contenir 4 caractères!',
            'confirmPassword.required' => 'Le champ confirmer mot de passe est requis!',
            'confirmPassword.min' => 'Le chmp confirmer le mot de passe doit au moin contenir 4 caractères!',
        ];
    }
}
