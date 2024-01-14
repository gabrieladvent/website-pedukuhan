<?php

namespace App\Http\Controllers;

use App\Models\LoginModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreLoginModelRequest;
use App\Http\Requests\UpdateLoginModelRequest;

class LoginModelController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        if ($user) {
            if (($user->admin == 4 || $user->admin == 6) && ($user->activate == 5 || $user->activate == 7)) {
                return redirect()->intended('dashboard/admin');
            }
        }
        return view('auth.login');
    }

    public function loginProses(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $user = Auth::user();
            $request->session()->regenerate();
            return redirect()->intended('dashboard/admin');
        }

        return back()->with('error', 'Login Gagal');
    }   
}
