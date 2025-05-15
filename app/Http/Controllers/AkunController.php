<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    // private $akunData = [
    //     1 => [
    //         'id' => 1,
    //         'nama' => 'John Doe',
    //         'email' => 'john.doe@example.com',
    //         'role' => 'Admin',
    //         'no_hp' => '081234567890',
    //         'kelas' => 'Kelas A',
    //         'status' => 'aktif',
    //     ],
    //     2 => [
    //         'id' => 2,
    //         'nama' => 'Jane Smith',
    //         'email' => 'jane.smith@example.com',
    //         'role' => 'Guru',
    //         'no_hp' => '082345678901',
    //         'kelas' => 'Kelas B',
    //         'status' => 'nonaktif',
    //     ],
    // ];

    public function index()
    {
        // Ambil semua data user
        $akun = User::all();

        // Kirim data ke view
        return view('admin.akun.index', compact('akun'));
    }

    public function create()
    {
        return view('admin.akun.create');
    }

    public function store(Request $request)
    {
        // Mendapatkan ID baru untuk akun

        User::created([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'status' => $request->status ?? 'nonaktif',
        ]);

        return redirect()->route('admin.akun.index')->with('success', 'Akun berhasil ditambahkan');
    }

    public function show($id)
    {
        // Fetch the specific user by ID
        $akun = User::findOrFail($id);

        // Pass the user to the view
        return view('admin.akun.show', compact('akun'));
    }

    public function edit($id)
    {
        $akun = $this->akunData[$id] ?? null;
        if (!$akun) {
            abort(404, 'Akun tidak ditemukan');
        }
        return view('admin.akun.edit', compact('akun'));
    }

    public function update(Request $request, $id)
    {
        // if (!isset($this->akunData[$id])) {
        //     abort(404, 'Akun tidak ditemukan');
        // }

        // $this->akunData[$id] = [
        //     'id' => $id,
        //     'nama' => $request->nama,
        //     'email' => $request->email,
        //     'role' => $request->role,
        //     'no_hp' => $request->no_hp,
        //     'kelas' => $request->kelas,
        //     'status' => $request->status ?? 'nonaktif'
        // ];

        return redirect()->route('admin.akun.index')->with('success', 'Akun berhasil diupdate');
    }

    public function logout()
    {
        return redirect()->route('admin.akun.index')->with('success', 'Anda telah logout');
    }

    public function profile()
    {
        return view('admin.akun.profile');
    }

    public function updateProfile(Request $request)
    {
        return redirect()->route('admin.akun.profile')->with('success', 'Profil berhasil diupdate');
    }

    public function destroy($id)
    {
        if (isset($this->akunData[$id])) {
            unset($this->akunData[$id]);
            return redirect()->route('admin.akun.index')->with('success', 'Akun berhasil dihapus');
        }

        return redirect()->route('admin.akun.index')->with('error', 'Akun tidak ditemukan');
    }
}
