<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginPetugas extends Model
{
    protected $table = 'petugas'; // Nama tabel dalam database
    protected $primaryKey = 'Id_Petugas'; // Nama primary key
    public $timestamps = false; // Atur waktu pembuatan dan pembaruan
}
