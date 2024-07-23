<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afdeling extends Model
{
    use HasFactory;

    protected $table = 'm_afdeling';

    protected $fillable = [
        'nama_afd',
        'no_afd',
        'alias_afd',
        'kebun_id'
    ];

    public function kebun()
    {
        return $this->belongsTo(Perkebunan::class, 'kebun_id');
    }
}

