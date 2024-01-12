<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\kategoriModel;
use App\Models\SubKategoriModel;
use Illuminate\Support\Facades\Auth;

class KategoriController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $kategori = kategoriModel::all();
        $users = User::all();
        $sub = SubKategoriModel::all();

        return view('admin.CRUD-kategori', compact('user', 'kategori', 'users', 'sub'));
    }

    public function addKategori(Request $request)
    {
        $validateData = $request->validate([
            'kategori_name' => 'required|min:5',
        ]);

        $validateData['kode_user'] = Auth::user()->id;
        $kategori = kategoriModel::create($validateData);

        if (!$kategori) {
            return redirect()->back()->with('error', 'Gagal Menambah Kategori!');
        }
        return redirect()->back()->with('success', 'Berhasil Menambahkan Kategori!');
    }

    public function editProses(Request $request)
    {
        $validateData = $request->validate([
            'kategori_nama' => 'required|min:5',
        ]);

        // Ambil ID kategori yang akan diubah
        $kategoriId = $request->input('id');

        // Lakukan proses update berdasarkan ID yang diterima
        $kategori = KategoriModel::find($kategoriId);

        if (!$kategori) {
            return redirect()->back()->with('error', 'Kategori tidak ditemukan!');
        }

        $kategori->kategori_name = $validateData['kategori_nama'];
        $kategori->save();

        return redirect()->back()->with('success', 'Berhasil mengubah kategori!');
    }
}
