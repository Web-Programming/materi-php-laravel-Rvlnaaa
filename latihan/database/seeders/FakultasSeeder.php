<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fakultas;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fakultas::insert([
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
