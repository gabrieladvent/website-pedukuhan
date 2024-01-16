<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\kategoriModel;
use App\Models\postingModel;
use App\Models\SubKategoriModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostingController extends Controller
{
    public function index()
    {
        $title = 'Tambah Postingan';
        $user = Auth::user();
        $kategori = kategoriModel::all();
        $sub = SubKategoriModel::all();
        return view('admin.tambah-post', compact('user', 'kategori', 'sub', 'title'));
    }

    public function daftar_posting()
    {
        $title = 'Daftar Postingan';
        $user = Auth::user();
        $posting = postingModel::all();
        $kategori = kategoriModel::all();
        $users = User::all();
        $sub = SubKategoriModel::all();
        return view('admin.daftar-post', compact('user', 'posting', 'kategori', 'users', 'sub', 'title'));
    }

    public function addPost(Request $request)
    {
        try {
            $validateData = $request->validate([
                'title' => 'required|max:255',
                'id_kategori' => 'required',
                'id_sub' => 'nullable',
                'body' => 'required',
                'foto_satu' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'foto_dua' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'foto_tiga' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'foto_empat' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'foto_lima' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $validateData['kode_user'] = Auth::user()->id;
            $validateData['headline'] = Str::limit(strip_tags($request->body), 100, '...');
            if($request->id_kategori != 2){
                $validateData['id_sub'] = null;
            }else{
                $validateData['id_sub'] = $request->id_sub;
            }

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
        $title = 'Postingan';
        $user = Auth::user();
        $post = postingModel::where('slug', $slug)
            ->where('kode_user', $kode_user)
            ->first();

        if (!$post) {
            return redirect()->back()->with('error', 'Postingan Tidak Ditemukan');
        }

        $users = User::where('id', $kode_user)->get(); // Mengambil koleksi user
        $kategori = kategoriModel::find($post->id_kategori);
        $sub = SubKategoriModel::find($post->id_sub);

        return view('admin.show-post', compact('user', 'post', 'users', 'kategori', 'title'));
    }

    public function editPosting($slug, $kode_user)
    {
        $title = 'Edit Postingan';
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
        $sub = SubKategoriModel::find($post->id_sub);
        $kategories = kategoriModel::all();
        $subs = SubKategoriModel::all();

        return view('admin.edit-post', compact('user', 'post', 'users', 'kategori', 'kategories', 'sub', 'subs', 'title'));
    }

    public function updatePostingProses(Request $request)
    {
        try {
            $postId = $request->input('id');
            $post = PostingModel::findOrFail($postId);

            $validateData = $request->validate([
                'title' => 'required|max:255',
                'id_kategori' => 'required',
                'id_sub' => 'nullable',
                'body' => 'required',
                'foto_satu' => 'nullable|image|mimes:jpeg,png,jpg|max:5048',
                'foto_dua' => 'nullable|image|mimes:jpeg,png,jpg|max:5048',
                'foto_tiga' => 'nullable|image|mimes:jpeg,png,jpg|max:5048',
                'foto_empat' => 'nullable|image|mimes:jpeg,png,jpg|max:5048',
                'foto_lima' => 'nullable|image|mimes:jpeg,png,jpg|max:5048',
            ]);

            $fotoPaths = [];
            $fotoNames = ['foto_satu', 'foto_dua', 'foto_tiga', 'foto_empat', 'foto_lima'];
            $fotoUpdated = false;

            foreach ($fotoNames as $fotoName) {
                if ($request->hasFile($fotoName)) {
                    $foto = $request->file($fotoName);
                    $namaFile = time() . '_' . $foto->getClientOriginalName();
                    $lokasiSimpan = 'public/imagePost/';

                    $foto->storeAs($lokasiSimpan, $namaFile);
                    $fotoPaths[$fotoName] = 'imagePost/' . $namaFile;

                    if ($post->$fotoName && file_exists(storage_path('app/public/' . $post->$fotoName))) {
                        unlink(storage_path('app/public/' . $post->$fotoName));
                    }
                    $fotoUpdated = true;
                }
            }

            if($request->id_kategori != 3){
                $validateData['id_sub'] = null;
            }

            if ($fotoUpdated) {
                $validateData = array_merge($validateData, $fotoPaths);
                $post->update($validateData);

                return redirect()->route('daftar-post')->with('success', 'Post berhasil diperbarui!');
            } else {
                $post->update($validateData);
                return redirect()->route('daftar-post')->with('success', 'Post berhasil diperbarui tanpa mengubah foto!');
            }
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Gagal mengupload foto. Pesan error: ' . $e->getMessage());
        }
    }

    public function deletepost($slug, $kode_user)
    {
        try {
            $post = PostingModel::where('slug', $slug)
                ->where('kode_user', $kode_user)
                ->first();

            if (!$post) {
                return redirect()->back()->with('error', 'Postingan tidak ditemukan.');
            }

            $post->delete();

            return redirect()->route('daftar-post')->with('success', 'Post berhasil dihapus.');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Gagal menghapus postingan. Pesan error: ' . $e->getMessage());
        }
    }
}
