<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blok extends Model
{
    use HasFactory;

    public $table = 'm_blok';

    public $fillable = [
        'id_kebun',
        'id_afdeling',
        'blok',
        'tahun_tanam',
        'komidel',
        'luas',
        'jmlh_pokok',
        'jmlh_tph',
        'jmlh_baris',
        'pjg_jalan',
        'aktif'
    ];


    public function kebun(){
        return $this->belongsTo(Perkebunan::class, 'id_kebun');
    }

    public function afdeling(){
        return $this->belongsTo(Afdeling::class, 'id_afdeling');
    }
}
