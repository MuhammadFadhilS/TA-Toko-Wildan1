<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'username' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin'),
            'notelp' => '085753724243',
            'alamat' => 'Jl. Soetoyo S Pal 7',
            'gender' => 'L'
        ]);

        User::create([
            'name' => 'Owner',
            'username' => 'owner@owner.com',
            'email_verified_at' => now(),
            'password' => bcrypt('owner'),
            'notelp' => '085753724244',
            'alamat' => 'Jl. Soetoyo S Pal 8',
            'gender' => 'L'
        ]);

        User::create([
            'name' => 'Kurir',
            'username' => 'kurir@kurir.com',
            'email_verified_at' => now(),
            'password' => bcrypt('kurir'),
            'notelp' => '085753724245',
            'alamat' => 'Jl. Soetoyo S Pal 9',
            'gender' => 'P'
        ]);
    }
}
