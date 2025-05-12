<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
     use HasFactory;

    protected $table = 'mahasiswa';

    protected $fillable = [
        'npm',
        'nama',
        'prodi_id',
        'fakultas_id',
        'alamat',
    ];

    // Relasi ke Prodi
    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }

    // Relasi ke Fakultas
    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }
}
