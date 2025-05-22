<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\CalonSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

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
            'status_pembayaran' => 'nullable|in:belum_lunas,lunas',
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

        // $ppdb->user = User::findOrFail($ppdb->user_id);

        $request->validate([
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
            'status_pembayaran' => 'nullable|in:belum_lunas,lunas',
        ]);

        $ppdb = CalonSiswa::findOrFail($id);
        // Update file hanya jika file baru diupload
        if ($request->hasFile('kk')) {
            if ($ppdb->kk) Storage::disk('public')->delete($ppdb->kk);
            $validated['kk'] = $request->file('kk')->store('images/berkas', 'public');
        }

        if ($request->hasFile('akta_lahir')) {
            if ($ppdb->akta_lahir) Storage::disk('public')->delete( $ppdb->akta_lahir);
            $validated['akta_lahir'] = $request->file('akta_lahir')->store('images/berkas', 'public');
        }

        if ($request->hasFile('ktp_ortu')) {
            if ($ppdb->ktp_ortu) Storage::disk('public')->delete( $ppdb->ktp_ortu);
            $validated['ktp_ortu'] = $request->file('ktp_ortu')->store('images/berkas', 'public');
        }


        $ppdb->update([
        'nama_lengkap' => $request->nama_lengkap,
        'nama_panggilan' => $request->nama_panggilan,
        'jenjang_kelas' => $request->jenjang_kelas,
        'tempat_lahir' => $request->tempat_lahir,
        'tanggal_lahir' => $request->tanggal_lahir,
        'usia' => $request->usia,
        'jenis_kelamin' => $request->jenis_kelamin,
        'agama' => $request->agama,
        'anak_ke' => $request->anak_ke,
        'status_dalam_keluarga' => $request->status_dalam_keluarga,
        'jumlah_saudara' => $request->jumlah_saudara,
        'provinsi' => $request->provinsi,
        'kabupaten_kota' => $request->kabupaten_kota,
        'kecamatan' => $request->kecamatan,
        'desa_kelurahan' => $request->desa_kelurahan,
        'alamat_lengkap' => $request->alamat_lengkap,
        'latitude' => $request->latitude,
        'longitude' => $request->longitude,
        'penyakit_bawaan' => $request->penyakit_bawaan,
        'alergi' => $request->alergi,
        'pengawasan_medis' => $request->pengawasan_medis,
        'cedera_serius' => $request->cedera_serius,
        'nama_ibu' => $request->nama_ibu,
        'no_hp_ibu' => $request->no_hp_ibu,
        'pekerjaan_ibu' => $request->pekerjaan_ibu,
        'nama_ayah' => $request->nama_ayah,
        'no_hp_ayah' => $request->no_hp_ayah,
        'pekerjaan_ayah' => $request->pekerjaan_ayah,
        'status' => $request->status,
        'status_pembayaran' => $request->status_pembayaran,

        ]);
        $ppdb->refresh();

        if ($request['status'] === 'diterima' && !Siswa::where('user_id', $ppdb->user_id)->exists()) {
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
        } else {
            // Jika status bukan diterima, ubah role user ke 'calon siswa'
            $ppdb->user->update(['role' => 'calon siswa']);
        }
        // Hapus data dari tabel siswa jika status ditolak
        if ($request['status'] === 'ditolak') {
            $siswa = Siswa::where('user_id', $ppdb->user_id)->first();
            if ($siswa) {
                // Hapus data siswa
                $siswa->delete();
            }
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
