<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $hutang = DB::table('users')
            ->join('jimpitan', 'users.id', '=', 'jimpitan.tidaksetor')
            ->select('jimpitan.tidaksetor')
            ->where('users.id', '=', auth()->user()->id)
            ->get();

        $jumlah = $hutang->count() * 500;
        $jumlah_idr = number_format($jumlah, 2, ",", ".");

        return view('Dashboard.User.user', ['active' => 'dashboard', 'jumlah_hutang' => $jumlah_idr]);
    }

    public function TabJimpitan()
    {
        return view('Dashboard.User.jimpitan', ['active' => 'jimpitan']);
    }
}
