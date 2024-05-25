<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;
    protected $table = 'upload'; // Nama tabel dalam database

protected $fillable = [
'filename', // Kolom untuk menyimpan nama file
'original_name', // Kolom untuk menyimpan ukuran file
'file_size',
    ];
}
