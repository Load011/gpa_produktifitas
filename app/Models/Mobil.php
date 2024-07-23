<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $table = "m_mobil";

    protected $fillable = [
        'jenis_mobil',
        'plat_bk',
        'no_lambung'
    ];
}
