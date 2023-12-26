<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('leading');
})->name('home');

Route::get('/rakyat', function () {
    return view('cerita-rakyat-view');
})->name('rakyat');

Route::get('/kearifan-lokal', function () {
    return view('kearifan-lokal-view');
})->name('kearifan');

Route::get('/kegiatan-masyarakat', function () {
    return view('kegiatan-view');
})->name('kegiatan');

Route::get('/login-weru/admin', function () {
    return view('auth.login');
})->name('login');