<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormKelola extends Model
{
    use HasFactory;

    protected $table = 'formkelola';

    protected $fillable = [
        'Nik',
        'Nama',
        'Judul_Buku',
        'Tgl_Peminjaman',
        'Tgl_Peminjaman_End',
        'Tgl_Pengembalian',
        'Denda',
        'Status',
    ];

    protected static function booted()
    {
        static::creating(function ($model) {
            if ($model->Tgl_Peminjaman && !$model->Tgl_Peminjaman_End) {
                $model->Tgl_Peminjaman_End = date('Y-m-d', strtotime($model->Tgl_Peminjaman . ' +7 days'));
            }
        });

        static::saving(function ($model) {
            $tglPeminjamanEnd = strtotime($model->Tgl_Peminjaman_End);
            $tglPengembalian = strtotime($model->Tgl_Pengembalian);

            if ($tglPengembalian > $tglPeminjamanEnd) {
                $daysLate = ($tglPengembalian - $tglPeminjamanEnd) / (60 * 60 * 24);
                $model->Denda = $daysLate * 10000;
                $model->Status = 'Terlambat';
            } else {
                $model->Denda = 0;
                $model->Status = 'Dikembalikan';
            }
        });
    }
}
