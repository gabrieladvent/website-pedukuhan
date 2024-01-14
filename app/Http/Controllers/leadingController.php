<?php

namespace App\Http\Controllers;

use App\Models\kategoriModel;
use App\Models\postingModel;
use App\Models\SubKategoriModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class leadingController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        $longitude = -8.0860096;
        $latitude = 110.7109651;

        $post = postingModel::all();
        $kegiatan = postingModel::where('id_kategori', 1)->get();
        $kearifan = postingModel::where('id_kategori', 2)->get();

        return view('leading', compact('longitude', 'latitude', 'title', 'post', 'kegiatan', 'kearifan'));
    }


    public function kegiatan_masyarakat()
    {
        $title = 'Kegiatan Masyarakat';
        $kegiatan = postingModel::where('id_kategori', 1)->get();
        $user = User::find($kegiatan->first()->kode_user);

        return view('kegiatan-view', compact('title', 'kegiatan', 'user'));
    }

    public function kearifan_lokal()
    {
        $title = 'Kearifan Lokal';
        $kearifan = postingModel::where('id_kategori', 2)->get();
        $user = User::find($kearifan->first()->kode_user);
        $kategori = kategoriModel::find($kearifan->first()->id_kategori);
        $subKategori = SubKategoriModel::find($kearifan->first()->id_sub);

        return view('kearifan-lokal-view', compact('title', 'kearifan', 'kategori', 'subKategori'));
    }

    public function profile_weru()
    {
        $title = 'Profile Weru';
        return view('profile-weru', compact('title'));
    }

    // public function send_messege(Request $request){
    //     $validatedData = $request->validate([
    //         'nama' => 'required',
    //         'email' => 'required|email',
    //         'message' => 'required',
    //     ]);

    //     try {
    //         // Simpan pesan ke dalam database
    //         Message::create($validatedData);

    //         // Redirect kembali ke halaman formulir dengan pesan sukses
    //         return redirect()->route('your.form')->with('success', 'Pesan berhasil dikirim!');
    //     } catch (\Exception $e) {
    //         // Redirect kembali ke halaman formulir dengan pesan error jika terjadi kesalahan
    //         return redirect()->route('your.form')->with('error', 'Gagal mengirim pesan. Error: ' . $e->getMessage());
    //     }
    //     return 'masuk';
    // }
}
