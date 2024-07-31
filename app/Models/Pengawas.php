<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengawas extends Model
{
    use HasFactory;
    
    public $table = 'm_pengawas';

    public $fillable = [
        'nama_pengawas',
        'id_kebun',
        'no_tlp'
    ];

    public function kebun(){
        return $this->belongsTo(Perkebunan::class, 'id_kebun');
    }
}
