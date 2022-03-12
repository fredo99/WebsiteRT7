<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{

    public function index(){
        $data = Album::all();
        return view('Dashboard.Admin.album', $data);
    }

    public function show(){
        $data = Album::all();
        return $data;
    }

    public function store(Request $request){

    }
}
