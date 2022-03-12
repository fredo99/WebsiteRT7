<?php

namespace App\Http\Controllers;

use App\Models\Jimpitan;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('Dashboard.Admin.admin', ['active' => 'dashboard']);
    }

    public function TabUser(){
        $data = User::all();

        return view('Dashboard.Admin.users', [
            'active' => 'users',
            'user' => $data
        ]);
    }

    public function GetUsers(){
        return User::all();
    }

    public function edit($id){
        return User::findOrFail($id);
    }

    public function TabAlbum(){
        return view('Dashboard.Admin.album', ['active' => 'album']);
    }

    public function TabJimpitan(){
        $data = Jimpitan::all();
        return view('Dashboard.Admin.jimpitan', [
            'active' => 'jimpitan',
            'jimpitan' => $data
        ]);
    }

    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required | max:30 ',
            'roles' => 'required',
            'email' => 'required | email:dns',
        ]);

        User::create($validate);
        return redirect('/Admin/Users');
    }

    public function update(Request $request, $id){
        $data = User::findOrFail($id);
        $data->name = $request->name;
        $data->roles = $request->role;
        $data->save();
    }

    public function destroy($id){
        $data = User::findOrFail($id);
        $data->delete();
    }
}
