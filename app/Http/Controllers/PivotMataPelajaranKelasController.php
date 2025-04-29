<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\MataPelajaran;
use App\Models\PivotMataPelajaranKelas;
use Illuminate\Http\Request;

class PivotMataPelajaranKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pivot = PivotMataPelajaranKelas::with(['MataPelajaran', 'kelas'])->get();
        return view('data.pivot_mapel_kelas.index', compact('pivot'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all();
        $mataPelajarans = MataPelajaran::all();
        return view('data.pivot_mapel_kelas.create', compact('kelas', 'mataPelajarans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'mata_pelajaran_id' => 'required|integer',
            'kelas_id' => 'required|integer',
        ]);

        PivotMataPelajaranKelas::create([
            'kelas_id' => $request->kelas_id,
            'mata_pelajaran_id' => $request->mata_pelajaran_id
        ]);
        return redirect()->route('data.pivot_mapel_kelas.index')->with('success', 'Mata Pelajaran berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pivot = PivotMataPelajaranKelas::with(['MataPelajaran', 'kelas'])->findOrFail($id);
        return view('data.pivot_mapel_kelas.show', compact('pivot'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $pivot = PivotMataPelajaranKelas::findOrFail($id);
        $kelas = Kelas::all();
        $mata_pelajaran = MataPelajaran::all();
        return view('data.pivot_mapel_kelas.edit', compact('pivot','kelas','mata_pelajaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'mata_pelajaran_id' => 'required|integer',
            'kelas_id' => 'required|integer',
        ]);

        $pivot = PivotMataPelajaranKelas::findOrFail($id);
        $pivot->update([
            'kelas_id' => $request->kelas_id,
            'mata_pelajaran_id' => $request->mata_pelajaran_id
        ]);
        return redirect()->route('data.pivot_mapel_kelas.index')->with('success', 'Mata Pelajaran berhasil ditambahkan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // $pivot = PivotMataPelajaranKelas::findOrFail($kelasId)->delete();
        // $kelas->mataPelajaran()->detach($mapelId);

        PivotMataPelajaranKelas::findOrFail($id)->delete();
        return redirect()->route('data.pivot_mapel_kelas.index')->with('success', 'Mata Pelajaran berhasil dihapus.');
    }
}
