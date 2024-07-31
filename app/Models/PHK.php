<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PHK extends Model
{
    use HasFactory;

    public $table = 'm_phk';

    public $fillable = [
        'nama_karyawan',
        'nik',
        'no_kk',
        'jabatan',
        'suku'
    ];
}
