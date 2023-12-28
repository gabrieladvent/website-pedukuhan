<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index()  {

        return view('admin.dashboard-admin');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
