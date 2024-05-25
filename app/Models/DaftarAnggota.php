<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarAnggota extends Model
{
    use HasFactory;

    protected $table = 'daftaranggotas';
    
    protected $fillable = [
        'nik',
        'nama',
        'asal',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'no_tlp',
        'upload_foto',
    ];
}
