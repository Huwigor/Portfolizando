<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Users extends Controller
{

    /* CREATE-USER */

    public function indexCreate(){

        if(auth()->user()){
            return view('mobile.home-mobile');
        } else {
            return view('mobile.create-account-mobile');
        }

    }


    public function createUser(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        if (User::where('email', $user->email)->exists()){
            return redirect()->back()->with('error', 'O email já está em uso!');
        } else {
            $user->save();
            Auth::Login($user);
            return view('mobile.home-mobile');
        }
    }


 
    /* LOGIN USER */


    public function indexLogin(){
        return view('mobile.login-mobile');
    }

    public function LoginUser(Request $request){

        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return view('mobile.home-mobile');
        } else {
            return redirect()->back()->with('error', 'Email ou senha incorretos!');
        }
    }




    /* LOGOUT-USER */
    
    
    public function LogoutUser(){
        Auth::logout();
        return view('mobile.login-mobile');
    }

}
