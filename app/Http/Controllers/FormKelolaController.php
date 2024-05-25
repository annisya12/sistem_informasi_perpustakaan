<?php

namespace App\Http\Controllers;

use App\Models\FormKelola;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FormKelolaController extends Controller
{
    // Metode untuk menampilkan halaman pembuatan form dan data dari tabel
    public function create(): View
    {
        return view('formkeloladata');
    }

    // Metode untuk menangani form submission
    public function store(Request $request)
    {
        // Validasi input form
        $validatedData = $request->validate([
            'Nik' => 'required|string|max:16',
            'Nama' => 'required|string|max:50',
            'Judul_Buku' => 'required|string|max:50',
            'Tgl_Peminjaman' => 'required|date',
            'Tgl_Peminjaman_End' => 'required|date',
            'Tgl_Pengembalian' => 'required|date',
        ]);

        // Menyimpan data baru ke tabel "formkelola"
        FormKelola::create($validatedData);

        // Redirect ke halaman dataaktivitas dengan pesan sukses
        return Redirect::to('/dataaktivitas')->with('success', 'Data berhasil disimpan.');
    }

    // Metode untuk menampilkan daftar data
    public function index(): View
    {
        // Mengambil semua data dari tabel "formkelola", diurutkan dari yang terbaru
        $formkelola = FormKelola::latest()->get();

        // Mengirim data ke view
        return view('dataaktivitas', compact('formkelola'));
    }
}
