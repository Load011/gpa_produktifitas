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
        Schema::create('m_afdeling', function (Blueprint $table) {
            $table->id();
            $table->string('nama_afd');
            $table->string('no_afd');
            $table->string('alias_afd');
            $table->unsignedBigInteger('kebun_id');
            $table->timestamps();


            $table->foreign('kebun_id')->references('id')->on('m_kebun')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_afdeling');
    }
};
