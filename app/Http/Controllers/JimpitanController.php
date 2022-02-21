<?php

namespace App\Http\Controllers;

use App\Models\Jimpitan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JimpitanController extends Controller
{
    public function index(){
        return Jimpitan::all();
    }

    public function SumJimpitan(){
        $sum = DB::table('jimpitans')->select('jumlahsetoran')->sum('jumlahsetoran');
        
        return number_format($sum, 2);
    }

    public function show($id){

        return view('jimpitan', [
            'jimpitan' => Jimpitan::findOrFail($id)
        ]);
    }
}
