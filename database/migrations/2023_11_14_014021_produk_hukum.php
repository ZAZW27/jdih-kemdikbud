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
        Schema::create('bpp_produk_hukum', function (Blueprint $table) {
            $table->id();
            $table->enum('tipe_dokumen', ['PERATURAN PERUNDANG-UNDANGAN']);
            $table->string('judul');
            $table->string('nama_pengarang');
            $table->enum('tipe_pengarang', ['Badan Organisasi']);
            $table->enum('jenis_pengarang', ['Pengarang Utama']);
            $table->integer('nomor_peraturan');
            $table->unsignedBigInteger('id_jenis_peraturan');
            $table->string('tempat_penetapan');
            $table->date('tanggal_penetapan');
            $table->date('tanggal_pengundangan');
            $table->unsignedBigInteger('id_tahun_peraturan');
            $table->string('sumber');
            $table->string('subjek');
            $table->enum('tipe_subjek', ['Topik']);
            $table->enum('jenis_subjek', ['Primary']);
            $table->unsignedBigInteger('id_status_peraturan');
            $table->text('catatan');
            $table->enum('bahasa', ['Bahasa Indonesia','Bahasa Inggris']);
            $table->integer('dilihat');
            $table->integer('diunduh');
            $table->string('file');
            $table->timestamps();

            $table->foreign('id_jenis_peraturan')->references('id')->on('jenis_peraturan');
            $table->foreign('id_tahun_peraturan')->references('id')->on('tahun_branch');
            $table->foreign('id_status_peraturan')->references('id')->on('status_branch');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bpp_produk_peraturan_walikotas');
    }
};
