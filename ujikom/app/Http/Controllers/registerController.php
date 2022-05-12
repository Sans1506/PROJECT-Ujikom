<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class registerController extends Controller
{
    public function register(){
        return view("register.register");
    }
    public function simpanregister(Request $request){
        $data = $request->validate([
            'password' => 'required|integer|digits:16|unique:users,password',
            'email' => 'required|email:dns|unique:users,email',
            'name' => 'required|min:3|max:255'
        ]);
        $data['password'] =bcrypt($data['password']);
        // $data = [
        //     'password'=>bcrypt($request->nik),
        //     'email' =>$request->email,
        //     'name'=>$request->name
        // ];
        // dd($data);
        User::create($data);
        return redirect('/login')->with("status","Registrasi berhasil");
    }
}