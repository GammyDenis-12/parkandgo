<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class userAuthController extends Controller
{
      public function registration(){
            
            return view('auth.UserRegistration');

      }
      
      public function register(Request $request){
         
        User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password'=> Hash::make($request->password)

        ]);
        return redirect()->route('user.login');

      }
     
      Public function login(){

         return view('auth.userLogin');    

      }
      public function store ( Request $request){
         
         if(Auth::attempt($request->only('email','password'))){
            return redirect()->route('user.home');
         }else{ 
         
            return redirect()->route('user.login')->with('fail','invalid credentials');
         

         }

        
               

      }
}
