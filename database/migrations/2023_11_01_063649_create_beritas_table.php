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
        Schema::create('tbl_berita', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 255);
            $table->string('tema', 255);
            $table->date('tanggal');
            $table->text('isi');
            $table->string('gambar_berita', 255);
            $table->integer('dilihat');
            $table->string('tautan');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};


