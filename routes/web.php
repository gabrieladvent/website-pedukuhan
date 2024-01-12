<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginModelController;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\SubController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckDevice;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\isLogin;
use App\Http\Middleware\RedirectIfAuthenticated;
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
    $longitude = -8.0860096;
    $latitude = 110.7109651;
    return view('leading', compact('longitude', 'latitude'));
})->name('home');


Route::get('rakyat', function () {
    return view('cerita-rakyat-view');
})->name('rakyat');

Route::get('kearifan-lokal', function () {
    return view('kearifan-lokal-view');
})->name('kearifan');

Route::get('kegiatan-masyarakat', function () {
    return view('kegiatan-view');
})->name('kegiatan');


Route::group([
    'middleware' => CheckDevice::class
], function () {

    Route::group([ 
        'middleware' => RedirectIfAuthenticated::class,
    ], function () {
        Route::get('login-weru/admin', [LoginModelController::class, 'index'])->name('login');
        Route::post('register-users/admin', [UserController::class, 'register'])->name('register');
        Route::post('home/admin', [LoginModelController::class, 'loginProses'])->name('prosesLogin');
    });


    Route::group([ 
        'middleware' => [isLogin::class, IsAdmin::class]
    ], function () {
        Route::get('dashboard/admin', [dashboardController::class, 'index'])->name('dashboard-admin');

        Route::get('admin/add/post/admin', [PostingController::class, 'index'])->name('post-view');
        Route::post('admin/add/post/admin/upload', [PostingController::class, 'addPost'])->name('post-proses');

        Route::get('admin/daftar-postingan', [PostingController::class, 'daftar_posting'])->name('daftar-post');
        Route::get('admin/detail-posting/{slug}/{kode_user}', [PostingController::class, 'showPosting'])->name('show-post');
        Route::get('admin/edit-posting/{slug}/{kode_user}', [PostingController::class, 'editPosting'])->name('edit-post');
        Route::post('admin/edit-posting/proses', [PostingController::class, 'updatePostingProses'])->name('edit-proses');
        Route::get('admin/delete-posting/{slug}/{kode_user}', [PostingController::class, 'deletepost'])->name('delete-post');

        Route::get('admin/kategori/CRUD', [KategoriController::class, 'index'])->name('crud-kategori');
        Route::post('admin/add/kategori', [KategoriController::class, 'addKategori'])->name('add-kategori');
        Route::post('admin/kategori/edit/proses', [KategoriController::class, 'editProses'])->name('edit-kategori');

        Route::post('admin/kategori/add/sub-kategori', [SubController::class, 'addSubKategori'])->name('add-sub');
        Route::post('admin/kategori/edit/sub-kategori/proses', [SubController::class, 'editSubKategori'])->name('edit-sub');

    Route::get('logout', [dashboardController::class, 'logout'])->name('logout');
    });
});
