<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
        $album = Album::all();
        $jumlahalbum = Album::all()->count();
        return view('Home', [
            'album' => $album,
            'jumlahalbum' => $jumlahalbum
        ]);
    }
}
