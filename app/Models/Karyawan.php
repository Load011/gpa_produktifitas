<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    public $table = 'm_karyawan';

    protected $fillable = [
        'nik',
        'no_kk',
        'nama',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'pendidikan',
        'jurusan',
        'status',
        'tanggal_masuk',
        'tahun_masuk',
        'gaji_pokok',
        'iuran',
        'alamat',
        'desa',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'negara',
        'kode_pos',
        'no_hp',
        'email',
        'npwp',
        'nama_ibu_kandung',
        'suku',
        'berat_badan',
        'tinggi_badan',
        'nama_bank',
        'nomor_rekening',
        'total_gaji',
        'id_kebun',
        'id_afdeling',
        'aktif',
        'masa_kontrak',
        'surat_kontrak'
    ];

    public function jabatan(){
        return $this->belongsTo(Jabatan::class, 'jabatan');
    }

    public function kebun(){
        return $this->belongsTo(Perkebunan::class, 'id_kebun');
    }

    public function afd(){
        return $this->belongsTo(Afdeling::class, 'id_afdeling');
    }
}
