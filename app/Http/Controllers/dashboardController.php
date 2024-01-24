<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\postingModel;
use Illuminate\Http\Request;
use App\Models\kategoriModel;
use App\Models\SubKategoriModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $kegiatan = postingModel::where('id_kategori', 1)->get();
        $kearifan = postingModel::where('id_kategori', 2)->get();
        $kategori = kategoriModel::all();
        $sub = SubKategoriModel::all();
        $jumlahUser = User::all();        
        $aktivasi = DB::table('users')->where('activate',  null)->count();

        $title = 'Dashboard';
        return view('admin.dashboard-admin', compact('user', 'title', 'kegiatan', 'kearifan', 'kategori', 'sub', 'jumlahUser', 'aktivasi'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
