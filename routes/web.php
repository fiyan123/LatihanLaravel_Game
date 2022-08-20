<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\PerusahaanController;
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

Route::get('/', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('layouts.admin');
});

Route::get('/perusahaan', function () {
    return view('perusahaan.index');
});

Route::get('/game', function () {
    return view('game.index');
});

Route::get('/tambah_perusahaan', function () {
    return view('perusahaan.create');
});

Auth::routes();

Route::resource('perusahaan', PerusahaanController::class);
Route::resource('game', GameController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
