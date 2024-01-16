<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriModel extends Model
{
    use HasFactory;

    protected $table = 'kategori';

    protected $fillable = ['kategori_name', 'kode_user'];

    public function postings()
    {
        return $this->hasMany(PostingModel::class, 'id_kategori');
    }

    public function subKategoris()
    {
        return $this->hasMany(SubKategoriModel::class, 'id_kategori', 'id');
    }
}