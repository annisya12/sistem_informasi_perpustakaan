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
        Schema::create('daftarkunjungan', function (Blueprint $table) {
            $table->increments('No');
            $table->string('Nama', 35 );
            $table->string('Asal', 35);
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
        Schema::dropIfExists('daftarkunjungan');
    }
};
