<?php

namespace App\Http\Controllers\Konten;

use App\Http\Controllers\Controller;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index()
    {
        // Cek apakah tabel kosong
        $data = VisiMisi::all();

        // Jika tabel kosong, gunakan data dummy
        if ($data->isEmpty()) {
            $data = collect([
                (object)[
                    'id' => 1,
                    'judul' => 'Visi',
                    'konten' => 'Mewujudkan generasi anak shalih dan shalihah yang cerdas, mandiri, dan berakhlak mulia 
                    berdasarkan nilai-nilai Islam.',
                    'updated_at' => '2025-05-03'
                ],
                (object)[
                    'id' => 2,
                    'judul' => 'Misi',
                    'konten' => 'Menanamkan nilai-nilai Islam sejak usia dini melalui pembiasaan ibadah dan akhlak mulia.',
                    'updated_at' => '2025-05-03'
                ]
            ]);
        }

        // Kirim data ke view
        return view('konten.visi_misi.index', compact('data'));
    }

    public function create()
    {
        // Menampilkan form untuk membuat data baru
        return view('konten.visi_misi.create');
    }

    public function store(Request $request)
    {
        // Validasi data input dari request
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
        ]);

        // Menyimpan data baru ke dalam database
        VisiMisi::create($validatedData);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('konten.visi_misi.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        // Mencari data berdasarkan ID
        $data = VisiMisi::findOrFail($id);

        // Menampilkan form edit untuk data yang dipilih
        return view('konten.visi_misi.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data input untuk update
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
        ]);

        // Mencari data berdasarkan ID dan update
        $data = VisiMisi::findOrFail($id);
        $data->update($validatedData);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('konten.visi_misi.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        // Mencari data berdasarkan ID dan menghapusnya
        $visiMisi = VisiMisi::findOrFail($id);
        $visiMisi->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('konten.visi_misi.index')->with('success', 'Data berhasil dihapus');
    }
}