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
        Schema::create('petugas', function (Blueprint $table) {
            $table->integer('Id_Petugas', 15);
            $table->string('Nama', 35);
            $table->string('Jabatan', 20);
            $table->string('Alamat', 30);
            $table->string('Tempat_Lahir', 10);
            $table->date('Tanggal_Lahir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugas');
    }
};
