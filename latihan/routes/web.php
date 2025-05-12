<?php


use App\Http\Controllers\MateriLatController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\FakultasController;

use Illuminate\Support\Facades\Route;

// Route::get('/', [MateriController::class, 'index']);

// Route::get('/materi/index',action:[MateriController::class,'index']);

// Route::get('/materi/index/{id}',action:[MateriController::class,'detail']);

// Route::get('/', [MateriController::class, 'index']);

// Route::get('/home', [MateriController::class, 'home']);

// Route::get('/about', [MateriController::class, 'about']);

// Route::resource('fakultas', FakultasController::class);

Route::resource('materi', MateriLatController::class);
Route::resource('prodi', ProdiController::class);
Route::resource('fakultas', FakultasController::class);
Route::resource('mhs', MahasiswaController::class);
Route::resource('dosen', DosenController::class);


Route::resource('prodi', App\Http\Controllers\ProdiController::class);
Route::resource('mhs', App\Http\Controllers\MahasiswaController::class);
Route::resource('prodi', App\Http\Controllers\DosenController::class);
Route::resource('prodi', App\Http\Controllers\MateriLatController::class);
