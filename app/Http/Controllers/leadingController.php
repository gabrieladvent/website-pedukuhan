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
        // $kegiatan = postingModel::where('id_kategori', 1)->get();
        // $kearifan = postingModel::where('id_kategori', 2)->get();

        $kegiatan = PostingModel::join('kategori', 'posting.id_kategori', '=', 'kategori.id')
            ->where('kategori.kategori_name', '=', 'Kegiatan')
            ->get();

        $kearifan = PostingModel::join('kategori', 'posting.id_kategori', '=', 'kategori.id')
            ->where('kategori.kategori_name', '=', 'Kearifan Lokal')
            ->get();
        // dd($kearifan);

        return view('leading', compact('longitude', 'latitude', 'title', 'post', 'kegiatan', 'kearifan'));
    }


    public function kegiatan_masyarakat()
    {
        $title = 'Kegiatan Masyarakat';
        // $kegiatan = postingModel::where('id_kategori', 1)->get();
        $kegiatan = PostingModel::join('kategori', 'posting.id_kategori', '=', 'kategori.id')
            ->where('kategori.kategori_name', '=', 'Kegiatan')
            ->get();

        if (count($kegiatan) > 0) {
            $user = User::find($kegiatan->first()->kode_user);
        } else {
            $user = "nothing";
        }

        return view('kegiatan-view', compact('title', 'kegiatan', 'user'));
    }

    public function kearifan_lokal()
    {
        $title = 'Kearifan Lokal';
        // $kearifan = postingModel::where('id_kategori', 2)->get();
        $kearifan = PostingModel::join('kategori', 'posting.id_kategori', '=', 'kategori.id')
            ->where('kategori.kategori_name', '=', 'Kearifan Lokal')
            ->get();

        if (count($kearifan) <= 0) {
            $user = 'nothing';
            return view('kearifan-lokal-view', compact('title', 'kearifan', 'user'));
        } else {
            $user = User::find($kearifan->first()->kode_user);
            $kategori = kategoriModel::find($kearifan->first()->id_kategori);
            $subKategori = SubKategoriModel::find($kearifan->first()->id_sub);
            return view('kearifan-lokal-view', compact('title', 'kearifan', 'kategori', 'subKategori', 'user'));
        }
    }

    public function profile_weru()
    {
        $title = 'Profile Weru';
        return view('profile-weru', compact('title'));
    }

    public function read_post($slug, $kode_user)
    {
        $post = PostingModel::where('slug', $slug)
            ->where('kode_user', $kode_user)
            ->first();
        $user = User::all();
        $title = 'Reading';

        $fotoNames = ['foto_satu', 'foto_dua', 'foto_tiga', 'foto_empat', 'foto_lima'];
        $foto = [];

        foreach ($fotoNames as $fotoName) {
            if (!empty($post->$fotoName)) {
                $foto[] = [
                    'path' => $post->$fotoName,
                    'name' => $fotoName,
                    'instagram' => 'https://www.instagram.com/',
                ];
            }
        }
        return view('read-view', compact('title', 'post', 'user', 'foto'));
    }

    public function send_messege(Request $request) {
        dd($request->all());
    }
}
