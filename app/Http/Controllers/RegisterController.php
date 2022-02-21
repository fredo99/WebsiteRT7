<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('Auth.register');
    }

    public function store(Request $request){

        // dd($request->all());

        $ValidatedData = $request->validate([
            'nama' => 'required|max:30',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $ValidatedData['password'] = bcrypt($ValidatedData['password']);

        // return $ValidatedData;

        User::create($ValidatedData);

        $request->session()->flash('success', 'Registration successfull! Please Login');
        return redirect('Auth.login');
    }
}
