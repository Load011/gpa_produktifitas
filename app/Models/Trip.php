<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $table = 'm_trip';

    protected $fillable = [
        'asal_trip',
        'tujuan_trip',
        'afdeling',
        'harga_trip',
        'jarak_trip'
    ];

    public function kebun1(){
        return $this->belongsTo(Perkebunan::class, 'asal_trip');
    }

    public function kebun2(){
        return $this->belongsTo(Perkebunan::class, 'tujuan_trip');
    }

    public function afd(){
        return $this->belongsTo(Afdeling::class, 'afdeling');
    }
}
