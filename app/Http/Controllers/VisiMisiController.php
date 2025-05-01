<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index()
    {
        $data = VisiMisi::all();
        return view('konten.visi_misi.index', compact('data'));
    }

    public function create()
    {
        return view('konten.visi_misi.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
        ]);

        VisiMisi::create($validatedData);

        return redirect()->route('visi-misi.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = VisiMisi::findOrFail($id);
        return view('konten.visi_misi.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);

        $visiMisi = VisiMisi::findOrFail($id);
        $visiMisi->update($validatedData);

        return redirect()->route('visi-misi.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $visiMisi = VisiMisi::findOrFail($id);
        $visiMisi->delete();

        return redirect()->route('visi-misi.index')->with('success', 'Data berhasil dihapus');
    }
}