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
        Schema::create('m_blok', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kebun');
            $table->unsignedBigInteger('id_afdeling');
            $table->string('blok');
            $table->string('tahun_tanam');
            $table->decimal('komidel', 18, 2);
            $table->integer('luas');
            $table->integer('jmlh_pokok');
            $table->integer('jmlh_tph');
            $table->integer('jmlh_baris')->nullable();
            $table->integer('pjg_jalan');
            $table->string('aktif')->default('Aktif');    
            $table->timestamps();

            $table->foreign('id_kebun')->references('id')->on('m_kebun')->onDelete('cascade');
            $table->foreign('id_afdeling')->references('id')->on('m_afdeling')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_blok');
    }
};
