<?php

namespace App\Http\Controllers\Konten;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    public function index()
    {
        $data = Kegiatan::all();

        if ($data->isEmpty()) {
            $data = collect([
                (object)[
                    'id' => 1,
                    'judul' => 'Field Trip ke Peternakan Kelinci',
                    'deskripsi' => 'Anak-anak belajar mengenal hewan dan memberi makan kelinci.',
                    'tanggal' => '2025-03-25',
                    'gambar' => 'app/public/images/berkas/test.jpg',
                ],
                (object)[
                    'id' => 2,
                    'judul' => 'Lomba Hafalan Surat Pendek',
                    'deskripsi' => 'Lomba antar kelas untuk menghafal surat-surat pendek Al-Qur\'an',
                    'tanggal' => '2025-04-12',
                    'gambar' => 'app/publicimages/berkas/test.jpg',
                ]
            ]);
        }

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
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $gambarPath = $request->file('gambar')?->store('kegiatan', 'public');

        Kegiatan::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'gambar' => $gambarPath
        ]);

        return redirect()->route('konten.kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan!');
    }

    public function show($id)
    {
        $data = Kegiatan::findOrFail($id);
        return view('konten.kegiatan.show', compact('data'));
    }

    public function edit($id)
    {
        $data = Kegiatan::findOrFail($id);
        return view('konten.kegiatan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Kegiatan::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            if ($data->gambar) {
                Storage::disk('public')->delete($data->gambar);
            }
            $data->gambar = $request->file('gambar')->store('kegiatan', 'public');
        }

        $data->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'gambar' => $data->gambar,
        ]);

        return redirect()->route('konten.kegiatan.index')->with('success', 'Kegiatan berhasil diupdate!');
    }

    public function destroy($id)
    {
        $data = Kegiatan::findOrFail($id);
        if ($data->gambar) {
            Storage::disk('public')->delete($data->gambar);
        }
        $data->delete();

        return redirect()->route('konten.kegiatan.index')->with('success', 'Kegiatan berhasil dihapus!');
    }
}
