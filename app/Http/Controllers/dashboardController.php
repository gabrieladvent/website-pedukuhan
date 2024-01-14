<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index()  {
        $user = Auth::user();
        $title = 'Dashboard';
        return view('admin.dashboard-admin', compact('user', 'title'));
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }
}
