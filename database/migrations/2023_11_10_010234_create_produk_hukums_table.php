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
        Schema::create('bpp_produk_hukums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_jenis_peraturan');
            $table->unsignedBigInteger('id_tahun_peraturan');
            $table->unsignedBigInteger('id_status_peraturan');
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
        Schema::dropIfExists('bpp_produk_hukums');
    }
};
