<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    public function index()
    {
        $data = Kegiatan::all();
        return view('konten.kegiatan.index', compact('data'));
    }

    public function create()
    {
        return view('konten.kegiatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $fotoPath = $request->file('foto')?->store('kegiatan', 'public');

        Kegiatan::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'foto' => $fotoPath
        ]);

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('konten.kegiatan.edit', compact('kegiatan'));
    }

    public function update(Request $request, $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            if ($kegiatan->foto) {
                Storage::disk('public')->delete($kegiatan->foto);
            }
            $kegiatan->foto = $request->file('foto')->store('kegiatan', 'public');
        }

        $kegiatan->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'foto' => $kegiatan->foto,
        ]);

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil diupdate!');
    }

    public function destroy($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        if ($kegiatan->foto) {
            Storage::disk('public')->delete($kegiatan->foto);
        }
        $kegiatan->delete();
        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil dihapus!');
    }
}