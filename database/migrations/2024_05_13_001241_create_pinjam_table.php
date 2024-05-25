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
        Schema::create('pinjam', function (Blueprint $table) {
            $table->string('Nik', 16); // Menggunakan auto-increment untuk ID
            $table->string('Nama', 50);
            $table->string('Judul_Buku', 50);
            $table->date('Tgl_Peminjaman');
            $table->date('Tgl_Peminjaman_End')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjam');
    }
};
