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
        Schema::create('m_pengawas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kebun');
            $table->string('nama_pengawas');
            $table->string('no_tlp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_pengawas');
    }
};
