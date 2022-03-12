<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\JimpitanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('jimpitan', [JimpitanController::class, 'index']);
Route::get('sumjimpitan', [JimpitanController::class, 'SumJimpitan']);

Route::get('users', [AdminController::class, 'GetUsers']);
Route::get('/edit/{id}', [AdminController::class, 'edit']);
