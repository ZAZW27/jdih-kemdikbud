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
            $tbl->string('sumber');
            $tbl->string('subjek');
            $tbl->boolean('status_peraturan');
            $tbl->string('detail_status');
            $tbl->string('bahasa');
            $tbl->string('lokasi');
            $tbl->string('bidang_hukum');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_peraturan');
    }
};
