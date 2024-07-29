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
        Schema::create('t_kendaraan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mobil_id');
            $table->unsignedBigInteger('supir_id');
            $table->timestamps();

            $table->foreign('mobil_id')->references('id')->on('m_mobil')->onDelete('cascade');
            $table->foreign('supir_id')->references('id')->on('m_supir')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_kendaraan');
    }
};
