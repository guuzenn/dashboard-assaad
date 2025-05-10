<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = [
            'nama' => 'Admin User',
            'email' => 'admin@example.com',
            'role' => 'Administrator',
            'no_hp' => '081234567890',
            'status' => 'aktif'
        ];
        
        return view('admin.profile.index', compact('profil'));
    }

    public function edit()
    {
        $profil = [
            'nama' => 'Admin User',
            'email' => 'admin@example.com',
            'role' => 'Administrator',
            'no_hp' => '081234567890',
            'status' => 'aktif'
        ];

        return view('admin.profile.edit', compact('profil'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|string|max:15',
            'status' => 'required|string|in:aktif,non-aktif',
        ]);

        $profil = [
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'status' => $request->status,
        ];

        return redirect()->route('admin.profile.index')->with('success', 'Profil berhasil diperbarui!');
    }

}


