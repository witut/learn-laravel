<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function handleLogin(LoginRequest $request){
        return $request;
        // dd($request->all());
    }
}
