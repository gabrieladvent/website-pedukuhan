<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index()  {
        $user = Auth::user();
        return view('admin.dashboard-admin', compact('user'));
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }
}
