<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapsContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::all();
        $sekolah = ['nama' => 'TK As-Saad Kindergarten','lat' => -6.360592387865933, 'lng' => 106.97207270914241]; // Contoh lokasi sekolah

        return view('data.maps.index', compact('siswa', 'sekolah'));
    }

    public function filterRadius($km)
    {
        $lat = -6.9147; // sekolah
        $lng = 107.6098;

        $siswa = DB::table('siswa')
            ->select("*", DB::raw(
                "(6371 * acos(cos(radians($lat)) * cos(radians(latitude)) * cos(radians(longitude) - radians($lng)) + sin(radians($lat)) * sin(radians(latitude)))) AS distance"
            ))
            ->having('distance', '<=', $km)
            ->get();

        return response()->json($siswa);
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
        //
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
