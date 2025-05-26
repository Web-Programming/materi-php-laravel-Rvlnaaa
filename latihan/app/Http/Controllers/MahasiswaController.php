<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function index() {
  $mhs = Mahasiswa::all(); // ambil data dari model Mahasiswa
    return view('mhs.index', compact('mhs')); 
}

public function create() {
    return view('mhs.create');
}

public function store(Request $request) {
   $request->validate([
        'nama' => 'required|string|max:100',
        'nim' => 'required|string|max:20|unique:mahasiswas,nim',
        'prodi' => 'required|string|max:50',
    ]);

    // Simpan data ke database
    Mahasiswa::create([
        'nama' => $request->nama,
        'nim' => $request->nim,
        'prodi' => $request->prodi,
    ]);

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('mhs.index')->with('success', 'Data mahasiswa berhasil ditambahkan.');
}

public function destroy($id) {
     $mhs = Mahasiswa::findOrFail($id); 
    $mhs->delete();              
    return redirect()->route('mhs.index');
}

}