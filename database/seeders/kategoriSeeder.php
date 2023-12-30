<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\kategoriModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            [
                'kategori_name' => 'Cerita Rakyat',
            ],
            [
                'kategori_name' => 'Kegiatan',
            ],
            [
                'kategori_name' => 'Kearifan Lokal',
            ],
        ];
        
        foreach ($kategori as $kategoriData) {
            kategoriModel::create($kategoriData);
        }
    }
}
