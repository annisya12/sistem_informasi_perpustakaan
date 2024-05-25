<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PinjamController extends Controller
{
    // Metode untuk menampilkan halaman pembuatan form dan data dari tabel
    public function create(): View
    {
        return view('formdatapinjam');
    }

    // Metode untuk menangani form submission
    public function store(Request $request)
    {
        // Validasi input form
        $validatedData = $request->validate([
            'Nik' => 'required|string|max:255',
            'Nama' => 'required|string|max:255',
            'Judul_Buku' => 'required|string|max:255',
            'Tgl_Peminjaman' => 'required|date',
            'Tgl_Peminjaman_End' => 'required|date',
        ]);

        // Menyimpan data baru ke tabel "pinjam"
        Pinjam::create($validatedData);

        // Redirect ke halaman dashmember dengan pesan sukses
        return Redirect::to('/dashmember')->with('success', 'Peminjaman berhasil.');
    }
}
