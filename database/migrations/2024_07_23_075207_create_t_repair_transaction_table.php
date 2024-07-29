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
        Schema::create('t_repair_transaction', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan');
            $table->decimal('harga_sparepart', 10, 0)->nullable();
            $table->decimal('harga_ban', 10, 2)->nullable();
            $table->decimal('harga_perbaikan', 10,2)->nullable();
            // $table->decimal('harga_bbm', 10, 2)->nullable();
            $table->decimal('total_harga_keseluruhan', 10, 0);
            $table->date('tanggal_perbaikan');
            $table->unsignedBigInteger('mobil_id');
            $table->timestamps();

            $table->foreign('mobil_id')->references('id')->on('m_mobil')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_repair_transaction');
    }
};
