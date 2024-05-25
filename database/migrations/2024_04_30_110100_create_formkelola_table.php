<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('formkelola', function (Blueprint $table) {
            $table->string('Nik', 16);
            $table->string('Nama', 50);
            $table->string('Judul_Buku', 50);
            $table->date('Tgl_Peminjaman');
            $table->date('Tgl_Peminjaman_End')->nullable(); // Tanggal akhir peminjaman otomatis
            $table->date('Tgl_Pengembalian');
            $table->decimal('Denda', 8, 2);
            $table->string('Status', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formkelola');
    }
};
