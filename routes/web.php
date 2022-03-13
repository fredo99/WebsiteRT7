<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\JimpitanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/jimpitan/{id}', [JimpitanController::class, 'show']);

//Akses Dashboard Admin
Route::group(['middleware' => ['auth', 'role:Admin'], 'prefix' => 'Admin'], function () {
    Route::get('/Dashboard', [AdminController::class, 'index']);
    Route::get('/Users', [AdminController::class, 'TabUser']);
    Route::post('/Users/create', [AdminController::class, 'store']);
    Route::get('/Users/update/{id}', [AdminController::class, 'update']);
    Route::get('/Users/delete/{id}', [AdminController::class, 'destroy']);
    Route::get('/Album', [AdminController::class, 'TabAlbum']);
    Route::post('/Album/create', [AdminController::class, 'storeAlbum']);
    Route::get('/Album/delete/{id}', [AdminController::class, 'destroyAlbum']);
    Route::get('/Album/edit/{id}', [AdminController::class, 'editAlbum']);
    Route::get('/Album/update/{id}', [AdminController::class, 'updateAlbum']);
    Route::get('/Jimpitan', [AdminController::class, 'TabJimpitan']);
});

//Akses Dashboard User
Route::group(['middleware' => ['auth', 'role:User'], 'prefix' => 'User'], function () {
    Route::get('/Dashboard', [UserController::class, 'index']);
    Route::get('/Jimpitan', [UserController::class, 'TabJimpitan']);
});
