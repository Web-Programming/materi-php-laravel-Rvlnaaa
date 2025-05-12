<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Models\Fakultas;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mhs = Mahasiswa::with('prodi', 'fakultas')->get();
        return view('mhs.index', compact('mhs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          $prodi = Prodi::all();
        $fakultas = Fakultas::all();
        return view('mhs.create', compact('prodi', 'fakultas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
            'npm' => 'required|unique:mhs',
            'nama' => 'required',
            'prodi_id' => 'required',
            'fakultas_id' => 'required',
            'alamat' => 'nullable',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mhs.index')->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $mhs = Mahasiswa::with('prodi', 'fakultas')->findOrFail($id);
        return view('mhs.show', compact('mhs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        $prodi = Prodi::all();
        $fakultas = Fakultas::all();
        return view('mhs.edit', compact('mhs', 'prodi', 'fakultas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $mhs = Mahasiswa::findOrFail($id);

        $request->validate([
            'npm' => 'required|unique:mhs,npm,' . $id,
            'nama' => 'required',
            'prodi_id' => 'required',
            'fakultas_id' => 'required',
            'alamat' => 'nullable',
        ]);

        $mhs->update($request->all());

        return redirect()->route('mhs.index')->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        $mhs->delete();

        return redirect()->route('mhs.index')->with('success', 'Data mahasiswa berhasil dihapus.');
}
}