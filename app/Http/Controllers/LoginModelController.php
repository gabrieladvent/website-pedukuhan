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
        // kita ambil data user lalu simpan pada variable $user
        $user = Auth::user();
        // kondisi jika user nya ada 
        if ($user) {
            if (($user->admin == 4 || $user->admin == 6) && ($user->activate == 5 || $user->activate == 7)) {
                return redirect()->intended('dashboard/admin');
            }
        }
        return view('auth.login');
    }

    public function loginProses(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credential = $request->only('email', 'password');
        if (Auth::attempt($credential)) {
            $user =  Auth::user();
            // return view('admin.dashboard-admin', compact('user'));
            return redirect()->intended('dashboard/admin');
        }
        return redirect()->back()->with('error', 'Maaf anda tidak memiliki akses');
    }   
}
