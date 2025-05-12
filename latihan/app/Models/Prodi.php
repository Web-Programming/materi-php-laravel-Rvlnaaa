<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model

{
    use HasFactory;
    protected $fillable = ['nama_prodi', 'fakultas_id'];
    protected $table = 'prodis'; // atau 'prodi' jika kamu pakai nama tabel itu
}

