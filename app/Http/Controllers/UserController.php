<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Ramsey\Uuid\Uuid;
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
        $slug = Str::slug($first_name . '-' . $last_name);

        try {
            $user = new User();
            $user->id = Uuid::uuid4()->getHex();
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

    public function index()
    {
        $title = 'Daftar User';
        $user = Auth::user();
        $userAll = User::all();
        return view('admin.daftar-user', compact('title', 'user', 'userAll'));
    }

    public function delete_user($id)
    {
        if(Auth::user()->id == $id){

            return redirect()->back()->with('error', 'Perubahan Gagal!');
        }
        try {
            $user = User::where('id', $id)
                ->first();
            if (!$user) {
                return redirect()->back()->with('error', 'User tidak ditemukan.');
            }
            $user->delete();

            return redirect()->route('daftar-user')->with('success', 'User berhasil dihapus.');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Gagal menghapus user. Pesan error: ' . $e->getMessage());
        }
    }

    public function aktivasi_akun($id)
    {
        if(Auth::user()->id == $id){
            return redirect()->back()->with('error', 'Perubahan Gagal!');

        }
        try {
            $user = User::findOrFail($id);
            if ($user->admin == 2 && $user->activate == 3) {
                // dd($user);
                $user->update([
                    'admin' => '4',
                    'activate' => '5',
                ]);
                return redirect()->back()->with('success', 'Akun berhasil diaktifkan!');

            } elseif ($user->admin == 4 && $user->activate == 5) {
                $user->update([
                    'admin' => '2',
                    'activate' => '3',
                ]);
                return redirect()->back()->with('success', 'Akun berhasil non-aktifkan!');
            } else{
                return redirect()->back()->with('error', 'Super Admin tidak dapat diubah');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal mengaktifkan akun. Pesan error: ' . $e->getMessage());
        }
    }
}
