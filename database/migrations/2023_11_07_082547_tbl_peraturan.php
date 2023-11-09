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
        Schema::create('tbl_peraturan', function (Blueprint $table) {
            $table->id();
            $table->string('tipe_dokumen');
            $table->string('judul_peraturan');
            $table->string('tajuk_entri_pertama');
            $table->unsignedBigInteger('nomor_id');
            $table->unsignedBigInteger('tahun_id');
            $table->unsignedBigInteger('jenis_id');
            $table->string('tmpt_penetapan');
            $table->date('tgl_penetapan');
            $table->date('tgl_pengundangan');
            $table->string('sumber');
            $table->unsignedBigInteger('subjek_id');
            $table->unsignedBigInteger('status_id');
            $table->string('detail_status');
            $table->string('bahasa');
            $table->string('lokasi');
            $table->string('bidang_hukum');
            $table->integer('view');
            $table->integer('download');
            $table->timestamps();

            $table->foreign('nomor_id')->references('id')->on('nomor_peraturan');// FK to nomor_peraturan table
            $table->foreign('tahun_id')->references('id')->on('tahun_peraturan');// FK to tahun_peraturan table
            $table->foreign('jenis_id')->references('id')->on('jenis_peraturan');// FK to jenis_peraturan table
            $table->foreign('subjek_id')->references('id')->on('subjek_peraturan');// FK to subjek_peraturan table
            $table->foreign('status_id')->references('id')->on('status_peraturan');// FK to status_peraturan table
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
