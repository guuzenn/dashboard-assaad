<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    public function index()
    {
        // Ambil semua data user
        $akun = User::whereNotIn('role', ['admin'])->get();

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

        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required|in:admin,guru,siswa,public',
         ]);

        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);

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
         $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required|in:admin,guru,siswa,public',
            // 'is_active' => 'required|boolean',
        ]);

        if ($request->filled('password')) {
            $validated['password'] = Hash::make($request->password);
        }

        $user = User::findOrFail($id);
        $user->update($validated);

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
        User::findOrFail($id)->delete();
        return redirect()->route('admin.akun.index')->with('success', 'Akun berhasil dihapus');
    }
}