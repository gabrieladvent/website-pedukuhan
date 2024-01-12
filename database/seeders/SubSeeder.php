<?php

namespace Database\Seeders;

use App\Models\SubKategoriModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            [
                'sub_name' => 'Cerita Rakyat',
            ],
            [
                'sub_name' => 'Kebudayaan',
            ],
            [
                'sub_name' => 'Tempat Sakral',
            ],
        ];
        
        foreach ($kategori as $kategoriData) {
            SubKategoriModel::create($kategoriData);
        }
    }
}
