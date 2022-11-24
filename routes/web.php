<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\UserController;

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

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    });
    Route::resource('kategori', KategoriController::class);
    Route::get('delkate/{kategori}', [KategoriController::class, 'destroy']);
    
    Route::resource('artikel', ArtikelController::class);
    Route::get('delart/{artikel}', [ArtikelController::class, 'destroy']);
    
    Route::resource('user', UserController::class);
    Route::get('deluser/{user}', [UserController::class, 'destroy']);
});

Route::get('template', function () {
    return view('template');
});

Route::get('/', [ArtikelController::class, 'beranda']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
