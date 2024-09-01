<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        User::create([
            'name' => 'Admin', // Nama pengguna
            'email' => 'admin@admin.com', // Email pengguna
            'password' => Hash::make('12345678'), // Password pengguna yang dienkripsi
        ]);
    }
}
