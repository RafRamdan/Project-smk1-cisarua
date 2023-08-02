<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index(){
        return view('login.login');
    }
    function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email Wajib Diisi',
            'password.required'=>'Password Wajib Diisi'
        ]);

        $infologin =[
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
           return redirect('/customers');
        }else{
            return redirect('')->withErrors('Email dan Password Yang DimasukkanTidak Sesuai')->withInput();

        }
        }
        function logout(){
            Auth::logout();
            return redirect('/login');
        }
    }

