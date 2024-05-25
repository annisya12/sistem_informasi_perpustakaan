<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginAnggota; // Import model LoginAnggota

class LoginController extends Controller
{
     public function showLoginForm()
    {
        return view('masukanggota'); // Ganti 'login' dengan nama view untuk halaman login
    }

    public function dashboard()
    {
        // Logika untuk menampilkan halaman dashboard
        return view('dashmember'); // Ganti 'dashboard_member' dengan nama view untuk halaman dashboard
    }
    
   public function login(Request $request)
{
    // Validasi input
    $request->validate([
        'nik' => 'required|string', // Sesuaikan dengan aturan validasi Anda
    ]);

    // Ambil NIK dari request
    $nik = $request->input('nik');

    // Cari apakah NIK ada di database
    $loginAnggota = LoginAnggota::where('NIK', $nik)->first();

    if ($loginAnggota) {
        // Jika NIK ditemukan, simpan NIK ke dalam sesi dan redirect ke halaman selanjutnya
        $request->session()->put('nik', $nik);
        return redirect()->route('dashmember')->with('success', 'Login berhasil!');
    } else {
        // Jika NIK tidak ditemukan, kembalikan ke halaman login dengan pesan kesalahan
        return redirect()->route('masukanggota')->with('error', 'NIK yang dimasukkan tidak valid!');
    }
}
}
