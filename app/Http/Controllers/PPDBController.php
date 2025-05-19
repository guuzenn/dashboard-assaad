<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalonSiswa;

class PPDBController extends Controller
{
    public function index()
    {
        $ppdb = CalonSiswa::all();
        return view('ppdb.index', compact('ppdb'));
    }

    public function show($id)
    {
        $ppdb = CalonSiswa::findOrFail($id);
        return view('ppdb.show', compact('ppdb'));
    }

    public function create()
    {
        return view('ppdb.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nama_panggilan' => 'required|string|max:255',
            'jenjang_kelas' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'usia' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'agama' => 'required|string|max:255',
            'anak_ke' => 'required|integer|min:1',
            'status_dalam_keluarga' => 'required|string|max:255',
            'jumlah_saudara' => 'required|integer|min:0',
            'provinsi' => 'required|string|max:255',
            'kabupaten_kota' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'desa_kelurahan' => 'required|string|max:255',
            'alamat_lengkap' => 'required|string|max:255',
            'latitude' => 'required|string|max:255',
            'longitude' => 'required|string|max:255',
            'kk' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'akta_lahir' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'ktp_ortu' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'penyakit_bawaan' => 'nullable|string',
            'alergi' => 'nullable|string',
            'pengawasan_medis' => 'nullable|string',
            'cedera_serius' => 'nullable|string',
            'nama_ibu' => 'required|string|max:255',
            'no_hp_ibu' => 'required|string|max:255',
            'pekerjaan_ibu' => 'required|string|max:255',
            'nama_ayah' => 'required|string|max:255',
            'no_hp_ayah' => 'required|string|max:255',
            'pekerjaan_ayah' => 'required|string|max:255',
            'status' => 'in:menunggu,diterima,ditolak',
            'status_pembayaran' => 'in:belum_bayar,lunas',

        ]);
        CalonSiswa::create($validated);
        return redirect()->route('ppdb.index')->with('success', 'Data pendaftaran berhasil disimpan!');
    }

    public function edit($id)
    {
        $ppdb = CalonSiswa::findOrFail($id);
        return view('ppdb.edit', compact('ppdb'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nama_panggilan' => 'required|string|max:255',
            'jenjang_kelas' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'usia' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'agama' => 'required|string|max:255',
            'anak_ke' => 'required|integer|min:1',
            'status_dalam_keluarga' => 'required|string|max:255',
            'jumlah_saudara' => 'required|integer|min:0',
            'provinsi' => 'required|string|max:255',
            'kabupaten_kota' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'desa_kelurahan' => 'required|string|max:255',
            'alamat_lengkap' => 'required|string|max:255',
            'latitude' => 'required|string|max:255',
            'longitude' => 'required|string|max:255',
            'kk' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'akta_lahir' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'ktp_ortu' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'penyakit_bawaan' => 'nullable|string',
            'alergi' => 'nullable|string',
            'pengawasan_medis' => 'nullable|string',
            'cedera_serius' => 'nullable|string',
            'nama_ibu' => 'required|string|max:255',
            'no_hp_ibu' => 'required|string|max:255',
            'pekerjaan_ibu' => 'required|string|max:255',
            'nama_ayah' => 'required|string|max:255',
            'no_hp_ayah' => 'required|string|max:255',
            'pekerjaan_ayah' => 'required|string|max:255',
            'status' => 'in:menunggu,diterima,ditolak',
            'status_pembayaran' => 'in:belum_bayar,lunas',

        ]);
        $ppdb = CalonSiswa::findOrFail($id);
        $ppdb->update($validated);
        return redirect()->route('ppdb.index')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy($id)
    {
        $ppdb = CalonSiswa::findOrFail($id);
        $ppdb->delete();
        return redirect()->route('ppdb.index')->with('success', 'Data berhasil dihapus!');
    }
}
