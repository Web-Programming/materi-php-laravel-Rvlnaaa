<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MateriController extends Controller
{
    public function index()
    {
        $materi = DB::table('materis')->get();
        return view('materi.index', compact('materi'));
    }

    public function createForm()
    {
        return view('materi.create');
    }

    public function create(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('materi', 'public');
        }

        DB::table('materis')->insert([
            'nama' => $request->nama,
            'gambar' => $gambar,
            'deskripsi' => $request->deskripsi,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('materi.index')->with('success', 'Materi berhasil ditambahkan');
    }

    public function detail($id)
    {
        $materi = DB::table('materis')->where('id', $id)->first();

        if (!$materi) {
            return redirect()->route('materi.index')->with('error', 'Materi tidak ditemukan');
        }

        return view('materi.detail', compact('materi'));
    }

    public function edit($id)
    {
        $materi = DB::table('materis')->where('id', $id)->first();

        if (!$materi) {
            return redirect()->route('materi.index')->with('error', 'Materi tidak ditemukan');
        }

        return view('materi.edit', compact('materi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        $materi = DB::table('materis')->where('id', $id)->first();

        if (!$materi) {
            return redirect()->route('materi.index')->with('error', 'Materi tidak ditemukan');
        }

        $gambar = $materi->gambar;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('materi', 'public');
        }

        DB::table('materis')->where('id', $id)->update([
            'nama' => $request->nama,
            'gambar' => $gambar,
            'deskripsi' => $request->deskripsi,
            'updated_at' => now(),
        ]);

        return redirect()->route('materi.index')->with('success', 'Materi berhasil diperbarui');
    }

    public function destroy($id)
    {
        DB::table('materis')->where('id', $id)->delete();
        return redirect()->route('materi.index')->with('success', 'Materi berhasil dihapus');
    }
}
