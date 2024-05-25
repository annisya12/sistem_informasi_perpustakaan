<?php

namespace App\Http\Controllers;

use App\Models\DaftarHadir;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DaftarHadirController extends Controller
{
    public function index(): View
    {
        $daftaranggota = DaftarHadir::latest()->paginate(10);
        return view('daftarhadir', compact('daftaranggota'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'Nama' => 'required',
            'Asal' => 'required',
            'Alamat' => 'required',
            'Tempat_lahir' => 'required',
            'Tanggal_lahir' => 'required|date',
        ]);

        DaftarHadir::create([
            'Nama' => $request->Nama,
            'Asal' => $request->Asal,
            'Alamat' => $request->Alamat,
            'Tempat_lahir' => $request->Tempat_lahir,
            'Tanggal_lahir' => $request->Tanggal_lahir,
        ]);

        return Redirect::to('/dashpengunjung')->with('success', 'Data berhasil disimpan.');
    }
}
