<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    //

    public function registration(){
        return view('auth.AdmLogin');
    }


    Public function login(Request $request){

         $email = $request['email'];
         $password = $request['password']; 
        
        if($email == "lino@gmail.com" && $password == "lino"){

            return redirect()->route('adm.dashboard');
           
        } else {

           return redirect()->route('login.page');
        }

    }

    Public function  register(Request $request){

        $user = User::create($request->validated());

        auth()->login($user);
    }
}
