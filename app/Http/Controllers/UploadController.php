<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;

class UploadController extends Controller
{
    public function index()
    {
        $uploads = Upload::all(); // Ambil semua data file dari database
        return view('uploaddatapetugas', compact('uploads')); // Kirim data ke view
    }
        
    public function store(Request $request)
{
    $request->validate([
        'fileInput' => 'required|mimes:pdf,xls,xlsx,doc,docx|max:2048', // Batasan maksimal 2MB
    ]);

    if ($request->hasFile('fileInput')) {
        $file = $request->file('fileInput'); // Mengakses file dengan nama yang benar
        $originalName = $file->getClientOriginalName();
        $fileName = pathinfo($originalName, PATHINFO_FILENAME); // Mengambil nama file tanpa ekstensi
        $extension = $file->getClientOriginalExtension(); // Mengambil ekstensi file

        // Buat nama file yang unik dengan menggunakan timestamp dan ekstensi file asli
        $nama_file = time() . '.' . $file->getClientOriginalExtension();

        // Pindahkan file ke direktori yang diinginkan (public/uploads)
        $file->move(public_path('uploads'), $nama_file);

        // Simpan informasi file ke database
        $upload = new Upload();
        $upload->filename = $nama_file; // Simpan nama file yang sudah diubah
        $upload->original_name = $originalName; // Simpan nama asli file
       $upload->file_size = filesize(public_path('uploads/' . $nama_file));
        $upload->save();

        return redirect()->back()->with('success', 'File berhasil diunggah.');
    }

    return redirect()->back()->with('error', 'Gagal mengunggah file.');
}
}
