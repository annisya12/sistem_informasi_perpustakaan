<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarHadir extends Model
{
    use HasFactory;

    protected $table = 'daftarkunjungan';

    protected $fillable = [
        'Nama', 
        'Asal', 
        'Alamat', 
        'Tempat_lahir',
        'Tanggal_lahir',
    ];
}
