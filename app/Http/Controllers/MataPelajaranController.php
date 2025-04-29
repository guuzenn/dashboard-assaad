<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mataPelajarans = MataPelajaran::all();
        return view('data.mata_pelajaran.index', compact('mataPelajarans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('data.mata_pelajaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        MataPelajaran::create([
            'nama' => $request->nama
        ]);

        return redirect()->route('data.mata_pelajaran.index')->with('success', 'Mata pelajaran berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mataPelajaran = MataPelajaran::findOrFail($id);
        return view('data.mata_pelajaran.show', compact('mataPelajaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mataPelajaran = MataPelajaran::findOrFail($id);
        return view('data.mata_pelajaran.edit', compact('mataPelajaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $mataPelajaran = MataPelajaran::findOrFail($id);
        $mataPelajaran->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('data.mata_pelajaran.index')->with('success', 'Mata pelajaran berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mataPelajaran = MataPelajaran::findOrFail($id);
        $mataPelajaran->delete();

        return redirect()->route('data.mata_pelajaran.index')->with('success', 'Mata pelajaran berhasil dihapus.');
    }
}
