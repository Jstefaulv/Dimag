<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use App\User;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['only'=>'showLoginForm']);
    }
    
    public function showLoginForm(){
        return view('Auth.login');
    }

    public function login(){
        $credentials = $this->validate(request(),[
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        
        if(Auth::attempt($credentials)){
            return redirect('/home');
        }
        return redirect('/')->with('flash','Credenciales incorrectas');
        
    }

    public function logout(){
        if(Auth::user()->codigo != null){
            Auth::user()->codigo = null;
        } 
        Auth::logout();
        return redirect('/');
    }
}
