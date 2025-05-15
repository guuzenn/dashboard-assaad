<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\LaporanHarian;
use App\Models\Siswa;
use Illuminate\Http\Request;

class LaporanHarianController extends Controller
{
    public function index(Request $request)
    {
        $laporan = LaporanHarian::with('kelas','siswa');
        $filter = Kelas::all();

        if ($request->kelas_id) {
            $laporan->where('kelas_id', $request->kelas_id);
        }

        $laporan = $laporan->latest()->get();
        return view('data.laporan_harian.index', compact('laporan','filter'));
    }

    public function show($id)
    {
        $laporan = LaporanHarian::with('kelas','siswa')->findOrFail($id);;

        return view('data.laporan_harian.show', compact('laporan'));
    }

    public function create()
    {
        $murid = Siswa::all();
        $kelas = Kelas::all();
        return view('data.laporan_harian.create', compact('kelas','murid'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'tanggal' => 'required|date',
            'kelas_id' => 'nullable',
            'siswa_id' => 'nullable',
            'deskripsi' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $fotoPath = null;

    if ($request->hasFile('image')) {
        $filename = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('assets/images/laporan_harian'), $filename);
        $fotoPath = 'assets/images/laporan_harian/' . $filename;
    }

    LaporanHarian::create([
        'judul' => $request->judul,
        'tanggal' => $request->tanggal,
        'kelas_id' => $request->kelas_id,
        'siswa_id' => $request->siswa_id,
        'deskripsi' => $request->deskripsi,
        'image' => $fotoPath,
    ]);

        return redirect()->route('data.laporan_harian.index')->with('success', 'Laporan harian berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // $kelas_list = [
        //     (object)['id' => 1, 'nama' => 'TK A'],
        //     (object)['id' => 2, 'nama' => 'TK B'],
        // ];

        // $laporan = (object)[
        //     'id' => $id,
        //     'judul' => 'Dummy Edit Laporan',
        //     'tanggal' => '2024-06-05',
        //     'deskripsi' => 'Deskripsi laporan dummy untuk edit.',
        //     'kelas_id' => 1,
        //     'kelas' => (object)['id' => 1, 'nama' => 'TK A'],
        //     'foto' => 'https://via.placeholder.com/150',
        // ];
        $murid = Siswa::all();
        $kelas = Kelas::all();
        $laporan= LaporanHarian::findOrFail($id);

        return view('data.laporan_harian.edit', compact('laporan', 'kelas', 'murid'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string',
            'tanggal' => 'required|date',
            'kelas_id' => 'nullable',
            'siswa_id' => 'nullable',
            'deskripsi' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        $laporan=LaporanHarian::findOrFail($id);
        if ($request->hasFile('image')) {
            // Hapus image lama jika ada
            if ($laporan->image && file_exists(public_path($laporan->image))) {
                unlink(public_path($laporan->image));
            }

            $filename = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('assets/images/laporan_harian'), $filename);
            $laporan->image = 'assets/images/laporan_harian/' . $filename;
        }

        $laporan->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'kelas_id' => $request->kelas_id,
            'siswa_id' => $request->siswa_id,
            'image' => $laporan->image,
        ]);

        return redirect()->route('data.laporan_harian.index')->with('success', 'Laporan harian berhasil diperbarui');
    }

    public function destroy($id)
    {
        $laporan=LaporanHarian::findOrFail($id);
        if ($laporan->foto && file_exists(public_path($laporan->foto))) {
            unlink(public_path($laporan->foto));
        }

        $laporan->delete();
        return redirect()->route('data.laporan_harian.index')->with('success', 'Laporan berhasil dihapus.');
    }
}
