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
        Schema::create('m_karyawan', function (Blueprint $table) {
            $table->id();
            $table->integer('nik')->nullable();
            $table->string('no_kk')->nullable();
            $table->string('nama')->nullable();
            $table->string('jk')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->datetime('tanggal_lahir')->nullable();
            $table->string('agama')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('status')->nullable();
            $table->string('jabatan_pekerjaan')->nullable();
            $table->datetime('tanggal_masuk')->nullable();
            $table->integer('tahun_masuk')->nullable();
            $table->integer('gaji_pokok')->nullable();
            $table->integer('iuran')->nullable();
            $table->string('alamat')->nullable();
            $table->string('desa')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('negara')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('email')->nullable();
            $table->string('npwp')->nullable();
            $table->string('nama_ibu_kandung')->nullable();
            $table->string('suku')->nullable();
            $table->integer('berat_badan')->nullable();
            $table->integer('tinggi_badan')->nullable();
            $table->string('nama_bank')->nullable();
            $table->string('nomor_rekening')->nullable();
            $table->integer('total_gaji')->nullable();
            $table->integer('id_kebun')->nullable();
            $table->integer('id_afdeling')->nullable();
            $table->string('aktif')->nullable();
            $table->string('masa_kontrak')->nullable();
            $table->string('surat_kontrak')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_karyawan');
    }
};
