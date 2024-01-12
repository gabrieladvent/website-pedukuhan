<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKategoriModel extends Model
{
    use HasFactory;

    protected $table = 'item_sub';
    protected $fillable = ['sub_name', 'id_kategori'];

    public function kategori()
    {
        return $this->belongsTo(kategoriModel::class, 'id_kategori', 'id');
    }

    public function postings()
    {
        return $this->hasMany(postingModel::class, 'id_sub', 'id');
    }
}
