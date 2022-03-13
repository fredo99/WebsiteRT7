<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Album;
use App\Models\Jimpitan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $data = Album::all();
        return view('Dashboard.Admin.album', ['active' => 'album', $data]);
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
            'password' => 'required|min:5|max:255'
        ]);

        $validate['password'] = bcrypt($validate['password']);

        User::create($validate);
        // return session()->flash('success', 'Data Berhasil Ditambahkan');
    }

    public function update(Request $request, $id){
        $data = User::findOrFail($id);
        $data->name = $request->name;
        $data->roles = $request->role;
        $data->save();

        // return session()->flash('success', 'Data Berhasil Diubah');
    }

    public function destroy($id){
        $data = User::findOrFail($id);
        $data->delete();

        // return session()->flash('success', 'Data Berhasil Dihapus');
    }

    public function storeAlbum(Request $request){
        $validate = $request->validate([
            'judul' => 'required | max:30 ',
            'keterangan' => 'required',
            'image' => 'required| image | file |',
        ]);

        if($request->file('image')){
            $validate['image'] = $request->file('image')->store('post-album');
        }

        Album::create($validate);
        return back()->with('success', 'Data Berhasil Ditambahkan');
    }

    public function destroyAlbum($id){
        $data = Album::findOrFail($id);

        if($data->image){
            Storage::delete($data->image);
        }
        $data->delete();
    }

    public function updateAlbum(Request $request, $id){
        $data = Album::findOrFail($id);

        $validate = $request->validate([
            'judul' => 'required | max:30 ',
            'keterangan' => 'required',
            'image' => 'required| image | file |',
        ]);

        if($data->image){
            $oldimage = $request->old_image;
            Storage::delete($oldimage);
        }

        Album::updated($validate);
        // return back()->with('success', 'Data Berhasil Ditambahkan');
    }

    public function editAlbum($id){
        $data = Album::findOrFail($id);

        return view('Dashboard.Admin.editAlbum', [
            'data' => $data,
            'active' => 'album'
        ]);
    }
}
