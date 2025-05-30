<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Insert 1 random user
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password'),
            'level' => 'admin' // tambahkan jika ada field 'level'
        ]);

        // Insert mahasiswa
        DB::table('mahasiswa')->insert([
            'npm' => '2420250046',
            'nama' => 'Nur Rachmat',
            'tempat_lahir' => 'Paris',
            'alamat' => 'Palembang',
            'created_at' => now(),
        ]);

        // Insert fakultas
        DB::table('fakultas')->insert([
            [
                'nama' => 'Fakultas Ilmu Komputer dan Rekayasa',
                'deskripsi' => 'Berfokus pada pengembangan teknologi informasi dan rekayasa sistem.',
                'gambar' => 'https://images.unsplash.com/photo-1581092334186-d40d8c8d4c54',
            ],
            [
                'nama' => 'Fakultas Ekonomi dan Bisnis',
                'deskripsi' => 'Mengembangkan ilmu ekonomi dan manajemen bisnis modern.',
                'gambar' => 'https://images.unsplash.com/photo-1508385082359-fc4f89b7c59d',
            ],
        ]);
    }
}