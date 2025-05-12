<?php

namespace App\Http\Controllers;

use App\Models\MateriLat;
use Illuminate\Http\Request;

class MateriLatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = MateriLat::all();
        return view('materilat.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('materilat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            // tambahkan validasi lain sesuai kebutuhan
        ]);

        MateriLat::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            // isi field lain jika ada
        ]);

        return redirect()->route('materilat.index')->with('success', 'Materi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = MateriLat::findOrFail($id);
        return view('materilat.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = MateriLat::findOrFail($id);
        return view('materilat.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            // validasi lain jika ada
        ]);

        $materi = MateriLat::findOrFail($id);
        $materi->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            // update field lain jika ada
        ]);

        return redirect()->route('materilat.index')->with('success', 'Data materi berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $materi = MateriLat::findOrFail($id);
        $materi->delete();

        return redirect()->route('materilat.index')->with('success', 'Data materi berhasil dihapus.');
    }
}
