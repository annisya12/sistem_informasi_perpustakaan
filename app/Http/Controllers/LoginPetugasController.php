<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginPetugas;

class LoginPetugasController extends Controller
{
    public function showLoginForm()
    {
        return view('petugas');
    }

    public function dashboard()
    {
        // Logika untuk menampilkan halaman dashboard
        return view('dashpetugas'); // Ganti 'dashboard_member' dengan nama view untuk halaman dashboard
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'Id_Petugas' => 'required|string', // Sesuaikan dengan aturan validasi Anda
        ]);

        // Ambil Id_Petugas dari request
        $Id_Petugas = $request->input('Id_Petugas');

        // Cari apakah Id_Petugas ada di database
        $loginPetugas = LoginPetugas::where('Id_Petugas', $Id_Petugas)->first();

        if ($loginPetugas) {
            // Jika Id_Petugas ditemukan, redirect ke halaman selanjutnya
            return redirect()->route('dashpetugas');
        } else {
            // Jika Id_Petugas tidak ditemukan, kembalikan ke halaman login dengan pesan kesalahan
            return redirect()->route('petugas')->with('error', 'ID yang dimasukkan tidak valid!');
        }
    }
}
