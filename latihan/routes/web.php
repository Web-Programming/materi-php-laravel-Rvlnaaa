<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\FakultasController;

// ===================
// Route: Mahasiswa
// ===================
Route::get('/mhs', [MahasiswaController::class, 'index'])->name('mhs.index');
Route::get('/mhs/create', [MahasiswaController::class, 'createForm'])->name('mhs.create');
Route::post('/mhs/store', [MahasiswaController::class, 'store'])->name('mhs.store');
Route::get('/mhs/{id}/detail', [MahasiswaController::class, 'detail'])->name('mhs.detail');
Route::post('/mhs/{id}/destroy', [MahasiswaController::class, 'destroy'])->name('mhs.destroy');

// ===================
// Route: Dosen
// ===================
Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
Route::get('/dosen/create', [DosenController::class, 'createForm'])->name('dosen.create');
Route::post('/dosen/store', [DosenController::class, 'store'])->name('dosen.store');
Route::get('/dosen/{id}/detail', [DosenController::class, 'detail'])->name('dosen.detail');
Route::post('/dosen/{id}/destroy', [DosenController::class, 'destroy'])->name('dosen.destroy');

// ===================
// Route: Prodi
// ===================
Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi.index');
Route::get('/prodi/create', [ProdiController::class, 'createForm'])->name('prodi.create');
Route::post('/prodi/store', [ProdiController::class, 'store'])->name('prodi.store');
Route::get('/prodi/{id}/detail', [ProdiController::class, 'detail'])->name('prodi.detail');
Route::post('/prodi/{id}/destroy', [ProdiController::class, 'destroy'])->name('prodi.destroy');

// ===================
// Route: Fakultas
// ===================
Route::get('/fakultas', [FakultasController::class, 'index'])->name('fakultas.index');
Route::get('/fakultas/create', [FakultasController::class, 'createForm'])->name('fakultas.create');
Route::post('/fakultas/store', [FakultasController::class, 'store'])->name('fakultas.store');
Route::get('/fakultas/{id}/detail', [FakultasController::class, 'detail'])->name('fakultas.detail');
Route::post('/fakultas/{id}/destroy', [FakultasController::class, 'destroy'])->name('fakultas.destroy');

// ===================
// Route: Materi
// ===================
Route::get('/materi', [MateriController::class, 'index'])->name('materi.index');
Route::get('/materi/create', [MateriController::class, 'createForm'])->name('materi.create');
Route::post('/materi/store', [MateriController::class, 'store'])->name('materi.store');
Route::get('/materi/{id}/detail', [MateriController::class, 'detail'])->name('materi.detail');
Route::post('/materi/{id}/destroy', [MateriController::class, 'destroy'])->name('materi.destroy');

// ===================
// Route Home / Redirect
// ===================
Route::get('/', function () {
    return redirect()->route('mhs.index');
});
