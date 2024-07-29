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
        Schema::create('m_trip', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asal_trip');
            $table->unsignedBigInteger('tujuan_trip');
            $table->unsignedBigInteger('afdeling');
            $table->decimal('harga_trip', 10,0);
            $table->integer('jarak_trip');
            $table->timestamps();

            $table->foreign('asal_trip')->references('id')->on('m_kebun')->onDelete('cascade');
            $table->foreign('tujuan_trip')->references('id')->on('m_kebun')->onDelete('cascade');
            $table->foreign('afdeling')->references('id')->on('m_afdeling')->onDelete('cascade');

        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_trip');
    }
};
