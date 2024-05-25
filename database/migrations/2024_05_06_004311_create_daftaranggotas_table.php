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
        Schema::create('daftaranggotas', function (Blueprint $table) {
            $table->string('Nama', 50);
            $table->string('Nik', 16);
            $table->string('Asal', 25);
            $table->string('Alamat', 30);
            $table->string('Tempat_Lahir', 10);
            $table->date('Tanggal_Lahir');
            $table->string('No_Tlp', 13);
            $table->string('Upload_Foto', 25)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftaranggotas');
    }
};
