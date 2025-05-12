<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->id(); // kolom id auto increment
            $table->string('nama'); // nama dosen
            $table->string('email')->unique(); // email dosen, unik
            $table->string('fakultas'); // fakultas dosen
            $table->string('telepon')->nullable(); // nomor telepon, boleh kosong
            $table->timestamps(); // kolom created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dosens');
    }
};
