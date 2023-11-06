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
        Schema::create('tbl_peraturan', function (Blueprint $tbl){
            $tbl->id();
            $tbl->string('tipe_dokumen', 255);
            $tbl->string('judul_peraturan');
            $tbl->string('tajuk_entri_pertama', 255);
            $tbl->text('nomor_peraturan');
            $tbl->integer('tahun_peraturan');
            $tbl->string('jenis_peraturan', 255);
            $tbl->string('tempat_penetapan', 255);
            $tbl->date('tanggal_penetapan');
            $tbl->date('tanggal_pengundangan');
            $tbl->string('sumber', 255);
            $tbl->string('subjek');
            $tbl->boolean('status_peraturan');
            $tbl->string('detail_status', 255);
            $tbl->string('bahasa', 255);
            $tbl->string('lokasi', 255);
            $tbl->string('bidang_hukum', 255);
            $tbl->integer('dilihat', 11);
            $tbl->integer('diunduh', 11);
            $tbl->string('link_detail_status', 250);
            $tbl->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peraturans');
    }
};
