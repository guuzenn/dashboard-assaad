<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'siswa', // Automatically assign "siswa" role
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }

    /**
     *  Handle user login. Login a user with role-based permissions. Test route redirection, will ve changed later.
     */
    public function login(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            // Redirect based on role
            if ($user->role === 'admin') {
                return redirect()->route('data.guru.index'); // Redirect to the Guru data prefix
            } elseif ($user->role === 'guru') {
                return redirect()->route('data.murid.index'); // Redirect to the Murid data prefix
            } else {
                return redirect()->route('ppdb.index'); // Default for siswa. Redirect to the PPFB prefix
            }
        }
        else {
            return redirect()->back()->with('error', 'Invalid credentials.')->withInput();
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }
}
