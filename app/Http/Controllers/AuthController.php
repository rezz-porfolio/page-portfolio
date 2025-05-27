<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function index() {
        return view("login");
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Kirim POST request ke backend Node.js
        $response = Http::post('http://localhost:3000/auth/login', [
            'username' => $request->username,
            'password' => $request->password,
        ]);

        // Cek apakah login berhasil
        if ($response->successful()) {
            $data = $response->json();

            // Simpan token ke session atau cookie jika perlu
            session(['token' => $data['token']]);
            session(['role' => $data['data']['role']]);

            return redirect()->route('dashboard')->with('success', 'Login berhasil!');
        }

        // Jika gagal
        return back()->withErrors(['login' => 'Username atau password salah.'])->withInput();
    }
}
