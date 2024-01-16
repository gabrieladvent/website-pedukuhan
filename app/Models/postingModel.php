<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class postingModel extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'posting';

    protected $fillable = [
            'title', 'slug', 'kode_user', 'headline', 'id_kategori', 'id_sub', 'body', 'foto_satu', 'foto_dua', 'foto_tiga', 'foto_empat', 'foto_lima',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function kategori()
    {
        return $this->belongsTo(kategoriModel::class, 'id_kategori');
    }

    public function subKategori()
    {
        return $this->belongsTo(SubKategoriModel::class, 'id_sub', 'id');
    }

    public function users() {
        return $this->belongsTo(user::class, 'id');
    }
}


