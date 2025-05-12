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
        // Insert data user
       DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password'),
        ]);

        //insert data mahasiswa menggunakan query builder
        DB::table('mahasiswa') ->insert(
            [
                'npm' => '2420250046',
                'nama' =>'Nur Rachmat',
                'tempat_lahir' => 'Paris',
                'alamat' => 'Palembang',
                'created_at' => date("y-m-d H:i:s")
            ]
        );

        DB::table('mahasiswa')
        ->where("npm", "2428250066")
        ->where(["npm" => "2428250066"]);
    }
}