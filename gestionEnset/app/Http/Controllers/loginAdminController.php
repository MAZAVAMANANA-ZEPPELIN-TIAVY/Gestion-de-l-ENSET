<?php

namespace App\Http\Controllers;

use App\Http\Requests\validateFormRequestLoginAdmin;
use Illuminate\Http\Request;

class loginAdminController extends Controller
{
    public function loginAdmin(validateFormRequestLoginAdmin $request){
        // dd($request);
 
        $verif = $request;
 
        if ($verif) {
             echo 'Verifié';
        }else {
             return redirect()->back();
        }
     }
}
