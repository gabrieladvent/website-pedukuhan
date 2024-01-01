<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\kategoriModel;
use App\Models\postingModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostingController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $kategori = kategoriModel::all();
        return view('admin.tambah-post', compact('user', 'kategori'));
    }

    public function daftar_posting()
    {
        $user = Auth::user();
        $posting = postingModel::all();
        $kategori = kategoriModel::all();
        $users = User::all();
        return view('admin.daftar-post', compact('user', 'posting', 'kategori', 'users'));
    }

    public function addPost(Request $request)
    {
        try {
            $validateData = $request->validate([
                'title' => 'required|max:255',
                'id_kategori' => 'required',
                'body' => 'required',
                'foto_satu' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'foto_dua' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'foto_tiga' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'foto_empat' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'foto_lima' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $validateData['kode_user'] = Auth::user()->id;
            $validateData['headline'] = Str::limit(strip_tags($request->body), 100, '...');

            $fotoPaths = [];

            $fotoNames = ['foto_satu', 'foto_dua', 'foto_tiga', 'foto_empat', 'foto_lima'];

            foreach ($fotoNames as $fotoName) {
                if ($request->hasFile($fotoName)) {
                    $foto = $request->file($fotoName);
                    $namaFile = time() . '_' . $foto->getClientOriginalName();
                    $lokasiSimpan = 'public/imagePost/';

                    $foto->storeAs($lokasiSimpan, $namaFile);
                    $fotoPaths[$fotoName] = 'imagePost/' . $namaFile;
                }
            }

            if (!empty($fotoPaths)) {
                $validateData = array_merge($validateData, $fotoPaths);
                $post = PostingModel::create($validateData);

                return redirect()->route('daftar-post')->with('success', 'Post berhasil ditambahkan!');
            } else {
                return redirect()->back()->with('error', 'Gagal mengupload foto. Pastikan unggah setidaknya satu foto.');
            }
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Gagal mengupload foto. Pesan error: ' . $e->getMessage());
        }
    }

    public function showPosting($slug, $kode_user)
    {
        $user = Auth::user();
        $post = postingModel::where('slug', $slug)
            ->where('kode_user', $kode_user)
            ->first();

        if (!$post) {
            return redirect()->back()->with('error', 'Postingan Tidak Ditemukan');
        }

        $users = User::where('id', $kode_user)->get(); // Mengambil koleksi user
        $kategori = kategoriModel::find($post->id_kategori);

        return view('admin.show-post', compact('user', 'post', 'users', 'kategori'));
    }

    public function editPosting($slug, $kode_user)
    {
        // dd($slug, $kode_user);
        $user = Auth::user();
        $post = postingModel::where('slug', $slug)
            ->where('kode_user', $kode_user)
            ->first();

        if ($user->id != $kode_user) {
            return redirect()->back()->with('error', 'Anda Tidak Dapat Mengedit');
        }
        if (!$post) {
            return redirect()->back()->with('error', 'Postingan Tidak Ditemukan');
        }

        $users = User::where('id', $kode_user)->get(); // Mengambil koleksi user
        $kategori = kategoriModel::find($post->id_kategori);
        $kategories = kategoriModel::all();

        return view('admin.edit-post', compact('user', 'post', 'users', 'kategori', 'kategories'));
    }
}