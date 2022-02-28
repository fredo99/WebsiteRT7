<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('Dashboard.User.user', ['active' => 'dashboard']);
    }

    public function TabJimpitan(){
        return view('Dashboard.User.jimpitan', ['active' => 'jimpitan']);
    }
}
