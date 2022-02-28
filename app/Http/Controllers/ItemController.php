<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function index(){
        return view('jimpitan');
    }

    public function store(Request $request){

        // dd($request->all());

        $request->validate([
            'nama' => 'required|max:30',
            'jumlah' => 'required|max:255',
        ]);

        // $ValidatedData['password'] = bcrypt($ValidatedData['password']);

        // return $ValidatedData;

        // User::create($ValidatedData);

        $item = new Item();

        $item->nama = $request->nama;
        $item->jumlah = $request->jumlah;

        $item->save();

        // dd($item);

        // $request->session()->flash('success', 'Registration successfull! Please Login');
        // return redirect('/dashboard');
        return redirect()->back();
    }
}
