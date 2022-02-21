<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JimpitanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\RoleAdmin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'home']);
Route::get('/login', [LoginController::class, 'index']);
// Route::post('/login', [LoginController::class, 'store'])->middleware(RoleAdmin::class);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/PostRegister', [RegisterController::class, 'store']);
Route::get('/jimpitan/{id}', [JimpitanController::class, 'show']);