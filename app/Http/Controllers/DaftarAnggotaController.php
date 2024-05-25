<?php

namespace App\Http\Controllers;

use App\Models\DaftarAnggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class DaftarAnggotaController extends Controller
{
    public function showDataMember()
    {
        $daftaranggotas = DaftarAnggota::all();
        return view('datamember', compact('daftaranggotas'));
    }

    public function downloadFoto($filename)
    {
        $file_path = public_path('uploads/' . $filename);

        // Cek apakah file ada
        if (file_exists($file_path)) {
            // Unduh file
            return response()->download($file_path);
        }

        // Redirect kembali dengan pesan error jika file tidak ditemukan
        return Redirect::back()->with('error', 'File tidak ditemukan.');
    }

    public function store(Request $request)
    {
        // Validasi request
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'asal' => 'required',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'no_tlp' => 'required',
            'upload_foto' => 'required|image|max:2048', // maksimal 2MB dan tipe gambar
        ]);

        // Menyimpan file upload
        if ($request->hasFile('upload_foto')) {
            $file = $request->file('upload_foto');
            $nama_file = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $nama_file);

            // Menyimpan data anggota baru
            DaftarAnggota::create([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'asal' => $request->asal,
                'alamat' => $request->alamat,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'no_tlp' => $request->no_tlp,
                'upload_foto' => $nama_file,
            ]);

            return redirect()->route('dash')->with('success', 'Anggota berhasil ditambahkan.');
        }

        // Redirect kembali dengan pesan error jika file tidak ditemukan
        return Redirect::back()->with('error', 'File tidak ditemukan.');
    }
}
