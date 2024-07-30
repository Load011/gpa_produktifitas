<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    use HasFactory;

    protected $table = 'm_supir';

    protected $fillable = [
        'nama_supir',
        'no_tlp',
        'no_sim',
        'no_ktp',
        'aktif'
    ];
}
