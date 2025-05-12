<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Prodi::all();
        return view("prodi.index",
        compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("prodi.create");
    }

    public function delete()
    {
        return view("prodi.delete");
    }

    public function detail()
    {
        return view("prodi.detail");
    }

    public function prodi() {
        return view('materi.prodi');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nama_prodi' => 'required|string|max:255',
    ]);

    Prodi::create([
        'nama_prodi' => $request->nama_prodi,
    ]);

    return redirect()->route('prodi.index')->with('success', 'Prodi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
      
            $data = Prodi::find0rFail($id);
            return view("prodi.show",
            compact('data'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Prodi::findOrFail($id);
        return view('prodi.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
     $request->validate([
            'nama_prodi' => 'required|string|max:255'
        ]);

        $prodi = Prodi::findOrFail($id);
        $prodi->update([
            'nama_prodi' => $request->nama_prodi
        ]);

        return redirect()->route('prodi.index')->with('success', 'Data berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prodi = Prodi::find0rFail($id);
        $prodi->delete();

        return
        redirect()->route('prodi.index')->with('success', 'prodi berhail dihapus');
    }

}
