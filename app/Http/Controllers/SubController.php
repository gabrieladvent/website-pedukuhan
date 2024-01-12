<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubKategoriModel;
use Illuminate\Support\Facades\Auth;

class SubController extends Controller
{
    public function addSubKategori(Request $request)
    {
        $validateData = $request->validate([
            'sub_name' => 'required|min:5',
        ]);

        $validateData['id_kategori'] = $request->id_kategori;
        $kategori = SubKategoriModel::create($validateData);

        if (!$kategori) {
            return redirect()->back()->with('error', 'Gagal Menambah Sub Kategori!');
        }
        return redirect()->back()->with('success', 'Berhasil Menambahkan Sub Kategori!');
    }

    public function editSubKategori(Request $request)
    {
        $validateData = $request->validate([
            'sub_name' => 'required|min:5',
        ]);

        $id_sub = $request->input('id');
        $kategori = SubKategoriModel::find($id_sub);

        if (!$kategori) {
            return redirect()->back()->with('error', 'Kategori tidak ditemukan!');
        }

        if ($kategori->sub_name === $validateData['sub_name']) {
            return redirect()->back()->with('error', 'Nama subkategori sama dengan yang sebelumnya!');
        }

        $kategori->sub_name = $validateData['sub_name'];
        $kategori->save();

        return redirect()->back()->with('success', 'Berhasil mengubah kategori!');
    }
}
