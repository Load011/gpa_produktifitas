<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $table = "t_kendaraan";
    protected $fillable = [
        'supir_id',
        'mobil_id',
    ];

    public function pengemudi()
    {
        return $this->belongsTo(Supir::class, 'supir_id');
    }

    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'mobil_id');
    }
}
