<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Auth.register');
    }

    public function store(Request $request)
    {

        $ValidatedData = $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        // $request->$ValidatedData['password'] = bcrypt($ValidatedData['password']);
        // bcrypt($request->$ValidatedData['pass']);
        // $ValidatedData['hutang_jimpitan'] = $request->hutang_jimpitan = 0;

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($ValidatedData['password']);
        $user->hutang_jimpitan = 0;
        $user->save();
        // User::create($ValidatedData);


        $request->session()->flash('success', 'Registration successfull! Please Login');
        return redirect('login');
    }
}
