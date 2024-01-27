<?php

namespace Database\Seeders;

use App\Models\User;
use Ramsey\Uuid\Uuid;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'id'       => Uuid::uuid4()->getHex(), // toString();
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'email' => 'super.admin',
            'password' => bcrypt('Gab_adv01'),
            'slug' => 'super-admin',
            'admin' => '6',
            'activate' => '7',
        ]);
    }
}
