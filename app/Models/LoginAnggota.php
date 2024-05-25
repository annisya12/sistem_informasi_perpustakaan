<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginAnggota extends Model
{
    protected $table = 'loginanggota'; // Nama tabel dalam database
    protected $primaryKey = 'No'; // Nama primary key
    public $timestamps = false; // Atur waktu pembuatan dan pembaruan
}
