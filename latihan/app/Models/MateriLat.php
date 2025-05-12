<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriLat extends Model
{
   use HasFactory;

    protected $table = 'MateriLat'; 

    protected $fillable = [
        'judul',
        'deskripsi',
      ];    
}
