<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\MataPelajaran;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NilaiController extends Controller
{
    public function index()
    {
        // $nilai = Nilai::with('siswa')->get();
        // return view('data.nilai.index', compact('nilai'));
        $guru = Guru::where('user_id', Auth::id())->first();
        $siswa = [];
        if ($guru) {
            $siswa = Siswa::whereHas('kelas', function ($q) use ($guru) {
                $q->where('guru_id', $guru->id);
            })->with('user')->get();
        }

        return view('data.nilai.index', compact('siswa'));
    }

    public function list($id){
        $nilai = Nilai::with('mata_pelajaran')->where('siswa_id',$id)->get();
        return view('data.nilai.list', compact('nilai','id'));
    }

    public function show($id)
    {
        $nilai = Nilai::with('mata_pelajaran','kelas','siswa')->findOrFail($id);
        // $siswaId = $nilai->siswa_id;
        return view('data.nilai.show', compact('nilai'));
    }

    public function edit($id)
    {
        $nilai = Nilai::findOrFail($id);
        $mapel = MataPelajaran::all();
        return view('data.nilai.edit', compact('nilai', 'mapel'));
    }

    public function create($id)
    {
        $siswa = Siswa::findOrFail($id);
        $mapel = MataPelajaran::all();
        return view('data.nilai.create', compact('siswa', 'mapel'));
    }

    public function store(Request $request, $id ){
        $request->validate([
            'mata_pelajaran_id' => 'required|string',
            'deskripsi' => 'nullable|string',
            'semester' => 'required|string',
            'nilai' => 'required|numeric',
        ]);
        $siswa = Siswa::findOrFail($id);

        // Cek apakah sudah ada nilai dengan kombinasi ini
        $cekNilai = Nilai::where('siswa_id', $id)
            ->where('mata_pelajaran_id', $request->mata_pelajaran_id)
            ->where('semester', $request->semester)
            ->first();

        if ($cekNilai) {
            return redirect()->back()->with('error', 'Nilai untuk mata pelajaran dan semester ini sudah ada.');
        }
        Nilai::create([
            'siswa_id' => $id,
            'kelas_id' => $siswa->kelas_id,
            'mata_pelajaran_id' => $request->mata_pelajaran_id,
            'deskripsi' => $request->deskripsi,
            'semester' => $request->semester,
            'nilai' => $request->nilai,
        ]);

        return redirect()->route('data.nilai.list',$id)->with('success', 'Nilai berhasil ditambahkan');

    }

    public function update(Request $request, $id){
        $request->validate([
            'mata_pelajaran_id' => 'required|string',
            'deskripsi' => 'nullable|string',
            'semester' => 'required|string',
            'nilai' => 'required|numeric',
        ]);

        $nilai = Nilai::findOrFail($id);
        $cekNilai = Nilai::where('siswa_id', $id)
            ->where('mata_pelajaran_id', $request->mata_pelajaran_id)
            ->where('semester', $request->semester)
            ->first();

        if ($cekNilai) {
            return redirect()->back()->with('error', 'Nilai untuk mata pelajaran dan semester ini sudah ada.');
        }
        $nilai->update([
            'siswa_id' => $nilai->siswa_id,
            'kelas_id' => $nilai->kelas_id,
            'mata_pelajaran_id' => $request->mata_pelajaran_id,
            'deskripsi' => $request->deskripsi,
            'semester' => $request->semester,
            'nilai' => $request->nilai,
        ]);

        return redirect()->route('data.nilai.list',$nilai->siswa_id)->with('success', 'Nilai berhasil diubah');

    }

    public function destroy($id)
    {
        $nilai = Nilai::findOrFail($id);
        $siswaId = $nilai ->siswa_id;
        $nilai->delete();
        return redirect()->route('data.nilai.list',$siswaId)->with('success', 'Nilai berhasil dihapus');
    }


}