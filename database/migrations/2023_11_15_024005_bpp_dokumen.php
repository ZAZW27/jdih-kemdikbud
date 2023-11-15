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
        Schema::create('bpp_dokumen', function (Blueprint $table) {
            $table->id();
            $table->string('OPD');
            $table->enum('peraturan', ['PERATURAN WALIKOTA', 'INSTRUKSI WALIKOTA', 'KEPUTUSAN WALIKOTA']);
            $table->string('judul_dok');
            $table->enum('status_dok', ['Paraf Koordinasi', 'Selesai']);
            $table->string('keterangan_dok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
