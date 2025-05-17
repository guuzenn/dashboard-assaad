<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function registerStudent(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'calon siswa',
        ]);

        return redirect()->route('login-student')->with('success', 'Registrasi berhasil, silahkan login.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->route('data.guru.index');
            } elseif ($user->role === 'guru') {
                return redirect()->route('data.murid.index');
            } else {
                return redirect()->route('beranda'); // Default for siswa. Redirect to the PPFB prefix
            }
        } else {
            return redirect()->back()->with('error', 'Invalid credentials.')->withInput();
        }
    }

    public function loginStudent(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            // Only allow "calon siswa"
            if ($user->role !== 'calon siswa') {
                Auth::logout();
                return back()->withErrors(['email' => 'Akun bukan siswa.']);
            }
            return redirect()->route('beranda');
        }
        return back()->withErrors(['email' => 'Email atau password salah.']);
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }

    // Tambahkan method dashboard
    public function dashboard()
    {
        return view('dashboard.index'); // pastikan file ini ada
    }
}
