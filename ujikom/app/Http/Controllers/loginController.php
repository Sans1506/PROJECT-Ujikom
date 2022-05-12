<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function __construct(){
        $this->middleware('guest')->except('logout');
    }    
    public function login(){
        return view("login.login");
    }
    public function authenticate(Request $request){
        $data = $request->validate([
            'name'=>'required|max:255|min:3|',
            'password'=>'required|integer|digits:16|'
        ]);

        if(Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard')->with('berhasil', 'Login Telah Berhasil');;
        }

        return back()->with('loginError', 'login failed');
    }
}