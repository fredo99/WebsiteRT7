<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('Dashboard.Admin.admin', ['active' => 'dashboard']);
    }

    public function TabUser(){
        return view('Dashboard.Admin.users', ['active' => 'users']);
    }

    public function TabAlbum(){
        return view('Dashboard.Admin.users', ['active' => 'album']);
    }

    public function TabJimpitan(){
        return view('Dashboard.Admin.users', ['active' => 'jimpitan']);
    }
}
