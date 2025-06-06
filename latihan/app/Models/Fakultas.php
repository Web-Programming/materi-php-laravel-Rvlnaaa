<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $table = 'fakultas';

    protected $fillable = [
        'nama',       // nama fakultas
        'deskripsi',  // deskripsi fakultas
        'gambar'      // nama file gambar fakultas
    ];
}