<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator);
        }
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $random_number = mt_rand(100, 999);
        // $kode_user = 'adm-' . $first_name . '-' . $last_name . '-' . $random_number;
        $slug = Str::slug($first_name . '-' . $last_name);

        try {
            $user = new User();
            // $user->kode_user = $kode_user;
            $user->first_name = $first_name;
            $user->last_name = $last_name;
            $user->email = $request->input('username');
            $user->password = bcrypt($request->input('password'));
            $user->slug = $slug;
            $user->save();

            return redirect()->route('login')->with('success', 'Akun Berhasil Terdaftar');
        } catch (Exception $e) {
            return redirect()->route('login')->with('error', 'Registrasi Gagal');
        }
    }
}
