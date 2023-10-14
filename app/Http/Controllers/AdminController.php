<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Album;
use App\Models\Jimpitan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $users = DB::table('users')
            ->select('id')
            ->where('roles', '=', 'User')
            ->get()->count();

        $jumlah_jimpitan = DB::table('jimpitan')
            ->sum('jumlahsetoran');

        $jumlah_album = Album::all()->count();
        // dd($jumlah_jimpitan);
        $jumlah_jimpitan_idr = number_format($jumlah_jimpitan, 2, ",", ".");

        return view(
            'Dashboard.Admin.admin',
            [
                'active' => 'dashboard',
                'jumlahUser' => $users,
                'jumlahJimpitan' => $jumlah_jimpitan_idr,
                'jumlahAlbum' => $jumlah_album
            ]
        );
    }

    public function TabUser()
    {
        $data = User::all();

        return view('Dashboard.Admin.users', [
            'active' => 'users',
            'user' => $data
        ]);
    }

    public function GetUsers()
    {
        return User::all();
    }

    public function edit($id)
    {
        return User::findOrFail($id);
    }

    public function TabAlbum()
    {
        $data = Album::all();
        return view('Dashboard.Admin.album', ['active' => 'album', $data]);
    }

    public function TabJimpitan()
    {
        $users = DB::table('users')
            ->select('id', 'name')
            ->where('roles', '=', 'User')
            ->get();

        $data = Jimpitan::all();
        return view('Dashboard.Admin.jimpitan', [
            'active' => 'jimpitan',
            'jimpitan' => $data,
            'users'    => $users
        ]);
    }

    public function storeJimpitan(Request $request)
    {
        $validate = $request->validate([
            'tanggal' => 'required',
            'tidaksetor' => 'required',
            'jumlahsetoran' => 'required'
        ]);
        // foreach ($request->tidaksetor as $tidaksetor) {
        // $data = $request->all();
        $validate['penyetor'] = auth()->user()->name;
        $validate['tidaksetor'] = implode(',', $request->tidaksetor);
        Jimpitan::create($validate);
        // }

        return redirect('/Admin/Jimpitan');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required | max:30 ',
            'roles' => 'required',
            'email' => 'required | email:dns',
            'password' => 'required|min:5|max:255'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->roles = $request->roles;
        $user->password = bcrypt($validate['password']);
        $user->hutang_jimpitan = 0;
        $user->save();

        // $validate['password'] = bcrypt($validate['password']);

        // User::create($validate);
        // return session()->flash('success', 'Data Berhasil Ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $data = User::findOrFail($id);
        $data->name = $request->name;
        $data->roles = $request->role;
        $data->save();

        // return session()->flash('success', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        // return session()->flash('success', 'Data Berhasil Dihapus');
    }

    public function storeAlbum(Request $request)
    {
        $validate = $request->validate([
            'judul' => 'required | max:30 ',
            'keterangan' => 'required',
            'image' => 'required| image | file |',
        ]);

        if ($request->file('image')) {
            $validate['image'] = $request->file('image')->store('post-album');
        }

        Album::create($validate);
        return back()->with('success', 'Data Berhasil Ditambahkan');
    }

    public function destroyAlbum($id)
    {
        $data = Album::findOrFail($id);

        if ($data->image) {
            Storage::delete($data->image);
        }
        $data->delete();
    }

    public function updateAlbum(Request $request, $id)
    {
        $data = Album::findOrFail($id);

        $validate = $request->validate([
            'judul' => 'required | max:30 ',
            'keterangan' => 'required',
            'image' => '| image | file |',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validate['image'] = $request->file('image')->store('post-album');
        }

        Album::where('id', $id)->update($validate);
        return back()->with('success', 'Data Berhasil Diubah');
    }

    public function editAlbum($id)
    {
        $data = Album::findOrFail($id);

        return view('Dashboard.Admin.editAlbum', [
            'data' => $data,
            'active' => 'album'
        ]);

        // return $data;
    }
}
