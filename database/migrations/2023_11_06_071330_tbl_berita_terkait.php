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
        Schema::create('tbl_berita_terkait', function (Blueprint $table) {
            $table->id();
            $table->integer('group_id');
            $table->unsignedBigInteger('id_berita'); // Foreign key column in tbl_berita_terkait

            $table->foreign('id_berita')
                ->references('id') // References the id column in tbl_berita
                ->on('tbl_berita')
                ->onUpdate('cascade')
                ->onDelete('restrict');
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
