<?php

namespace App\Http\Controllers;

use App\Models\administrateur;
use App\Models\gender;
use App\Models\nationality;
use App\Http\Requests\validateFormRequestRegisterAdmin;
use Illuminate\Http\Request;

class registerAdminController extends Controller
{
    public function genderNationality(){
        $gender = gender::All();
        $nationality = nationality::All();
        return view('pages/bacOffice/administrateur/registerAdministrateur', [
            'gender' => $gender,
            'nationality' => $nationality,
        ]);
    }

    public function registerAdmin(administrateur $administrateur, validateFormRequestRegisterAdmin $request){
        $verif = $request;
        
        if ($verif) {
            $password = password_hash($request->password, PASSWORD_ARGON2I);
            administrateur::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'contact' => $request->contact,
                'email' => $request->email,
                'dateOfBirthDay' => $request->dateOfBirthDay,
                'address' => $request->address,
                'password' => $password,
                'id_genre' => $request->gender,
                'id_nationality' => $request->nationality,
            ]);
        }else {
            return redirect()->back();
        }
    }
}
