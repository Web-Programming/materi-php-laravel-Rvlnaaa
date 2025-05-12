<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $dosen = Dosen::all();
return view('dosen.index', compact('dosen'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:dosens,email',
            'fakultas' => 'required|string|max:255',
            // tambahkan validasi lain jika perlu
        ]);

        Dosen::create($request->all());

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      $dosen = Dosen::findOrFail($id);
        return view('dosen.show', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil dihapus.');
    }
}
