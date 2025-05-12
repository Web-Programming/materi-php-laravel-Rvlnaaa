<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';
    protected $fillable = ['nama','nip','email','telepon','fakultas_id','prodi_id',
    ];

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
}
