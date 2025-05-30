<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/redirect', function () {
    $level = Auth::user()->level;

    if ($level === 'admin') {
        return redirect('/admin/home');
    } elseif ($level === 'dosen') {
        return redirect('/dosen/home');
    } elseif ($level === 'mahasiswa') {
        return redirect('/mahasiswa/home');
    } else {
        return redirect('/user/home');
    }
})->middleware(['auth']);

// Admin
Route::get('/admin/home', function () {
    return view('admin.home');
})->middleware(['auth', 'level:admin']);

// Dosen
Route::get('/dosen/home', function () {
    return view('dosen.home');
})->middleware(['auth', 'level:dosen']);

// Mahasiswa
Route::get('/mahasiswa/home', function () {
    return view('mahasiswa.home');
})->middleware(['auth', 'level:mahasiswa']);

// User biasa
Route::get('/user/home', function () {
    return view('user.home');
})->middleware(['auth', 'level:user']);


Route::middleware(['auth', 'level:admin'])->group(function () {
    // route untuk admin
});

Route::middleware(['auth', 'level:mahasiswa'])->group(function () {
    // route untuk mahasiswa
});

Route::middleware(['auth', 'level:dosen'])->group(function () {
    // route untuk dosen
});
