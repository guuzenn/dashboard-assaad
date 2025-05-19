<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\CalonSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            // Validasi semua field seperti sebelumnya...
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
            'status' => 'nullable|in:menunggu,diterima,ditolak',
            'status_pembayaran' => 'nullable|in:belum_bayar,lunas',
        ]);

        $kk = $request->file('kk') ? $request->file('kk')->store('images/berkas', 'public') : null;
        $akta = $request->file('akta_lahir') ? $request->file('akta_lahir')->store('images/berkas', 'public') : null;
        $ktp = $request->file('ktp_ortu') ? $request->file('ktp_ortu')->store('images/berkas', 'public') : null;

        $validated['kk'] = $kk;
        $validated['akta_lahir'] = $akta;
        $validated['ktp_ortu'] = $ktp;

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
        $ppdb = CalonSiswa::findOrFail($id);

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
            'status' => 'nullable|in:menunggu,diterima,ditolak',
            'status_pembayaran' => 'nullable|in:belum_bayar,lunas',
        ]);

        // Update file hanya jika file baru diupload
        if ($request->hasFile('kk')) {
            if ($ppdb->kk) Storage::disk('public')->delete($ppdb->kk);
            $validated['kk'] = $request->file('kk')->store('images/berkas', 'public');
        }

        if ($request->hasFile('akta_lahir')) {
            if ($ppdb->akta_lahir) Storage::disk('public')->delete($ppdb->akta_lahir);
            $validated['akta_lahir'] = $request->file('akta_lahir')->store('images/berkas', 'public');
        }

        if ($request->hasFile('ktp_ortu')) {
            if ($ppdb->ktp_ortu) Storage::disk('public')->delete($ppdb->ktp_ortu);
            $validated['ktp_ortu'] = $request->file('ktp_ortu')->store('images/berkas', 'public');
        }

        $ppdb->update($validated);
        $ppdb->refresh();

        // Cek jika status diterima dan belum ada di tabel siswa
        if ($validated['status'] === 'diterima' && !Siswa::where('user_id', $ppdb->user_id)->exists()) {
            // Ubah role user jadi "siswa"
            $ppdb->user->update(['role' => 'siswa']);

            // Tambahkan ke tabel siswa
            Siswa::create([
                'nama_lengkap' => $ppdb->nama_lengkap,
                'tanggal_lahir' => $ppdb->tanggal_lahir,
                'tempat_lahir' => $ppdb->tempat_lahir,
                'usia' => (int) $ppdb->usia,
                'jenis_kelamin' => $ppdb->jenis_kelamin,
                'agama' => $ppdb->agama,
                'status_keluarga' => $ppdb->status_dalam_keluarga,
                'alamat' => $ppdb->alamat_lengkap,
                'riwayat_penyakit' => $ppdb->penyakit_bawaan,
                'nama_ayah' => $ppdb->nama_ayah,
                'pekerjaan_ayah' => $ppdb->pekerjaan_ayah,
                'hp_ayah' => $ppdb->no_hp_ayah,
                'nama_ibu' => $ppdb->nama_ibu,
                'pekerjaan_ibu' => $ppdb->pekerjaan_ibu,
                'hp_ibu' => $ppdb->no_hp_ibu,
                'latitude' => $ppdb->latitude,
                'longitude' => $ppdb->longitude,
                'user_id' => $ppdb->user_id,
            ]);
        }

        return redirect()->route('ppdb.index')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy($id)
    {
        $ppdb = CalonSiswa::findOrFail($id);

        // Hapus file terkait
        if ($ppdb->kk) Storage::disk('public')->delete($ppdb->kk);
        if ($ppdb->akta_lahir) Storage::disk('public')->delete($ppdb->akta_lahir);
        if ($ppdb->ktp_ortu) Storage::disk('public')->delete($ppdb->ktp_ortu);

        $ppdb->delete();

        return redirect()->route('ppdb.index')->with('success', 'Data berhasil dihapus!');
    }
}
