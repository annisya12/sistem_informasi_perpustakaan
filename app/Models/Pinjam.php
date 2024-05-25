<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;

    protected $table = 'pinjam';  // Pastikan nama tabel benar

    protected $fillable = [
        'Nik',
        'Nama',
        'Judul_Buku',
        'Tgl_Peminjaman',
        'Tgl_Peminjaman_End',
    ];

    protected static function booted()
    {
        static::creating(function ($model) {
            if ($model->Tgl_Peminjaman && !$model->Tgl_Peminjaman_End) {
                $model->Tgl_Peminjaman_End = date('Y-m-d', strtotime($model->Tgl_Peminjaman . ' +7 days'));
            }
        });
    }
}
