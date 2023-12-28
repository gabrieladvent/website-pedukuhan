<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\LoginModelController;
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
    return view('leading');
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

    Route::get('logout', [dashboardController::class, 'logout']);
    });
});
