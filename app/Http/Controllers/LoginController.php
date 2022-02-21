<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('Auth.login');
    }

    public function login(){

        return "WELCOME TO LOGIN PAGE";
    }

    public function logout(){
        return view('home');
    }
}
