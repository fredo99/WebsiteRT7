<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('Auth.login');
    }

    public function authenticate(Request $request){

        $credentials = $request->validate([
            'email' => 'required | email:dns',
            'password' => 'required',
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $role = auth()->user()->roles;

            if($role == 'Admin'){
                return redirect()->intended('/Admin/Dashboard');
            }else{
                return redirect()->intended('/User/Dashboard');
            }

        }
 
        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
