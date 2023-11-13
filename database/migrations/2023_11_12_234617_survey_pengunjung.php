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
        SChema::create('survey_pengunjung', function (Blueprint $tbl){
            $tbl->id();
            $tbl->enum('ui_survey', ['Sangat Setuju', 'Setuju', 'Kurang Setuju', 'Tidak Setuju']);
            $tbl->enum('ux_search_survey', ['Sangat Setuju', 'Setuju', 'Kurang Setuju', 'Tidak Setuju']);
            $tbl->enum('kelengkapan_dokumen', ['Sangat Setuju', 'Setuju', 'Kurang Setuju', 'Tidak Setuju']);
            $tbl->enum('validasi_hukum_dokumen', ['Sangat Setuju', 'Setuju', 'Kurang Setuju', 'Tidak Setuju']);
            $tbl->timestamps();
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
