<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentRekapNilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $siswa = Auth::user()->siswa;
        // $laporan = Nilai::where('siswa_id', $siswa->id)->get();
        $semester = $request->input('semester');
        $query = Nilai::with('mata_pelajaran')->where('siswa_id', $siswa->id);
        if ($semester && in_array($semester, ['ganjil', 'genap'])) {
            $query->where('semester', $semester);
        }
        $laporan = $query->get();

        $rataGanjil = Nilai::where('siswa_id', $siswa->id)
            ->where('semester', 'ganjil')
            ->avg('nilai');

        $rataGenap = Nilai::where('siswa_id', $siswa->id)
            ->where('semester', 'genap')
            ->avg('nilai');
        return view('student.rekap_nilai.index', compact('laporan', 'rataGanjil', 'rataGenap'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $laporan =  Nilai::findOrFail($id);
        return view('student.rekap_nilai.show', compact('laporan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
