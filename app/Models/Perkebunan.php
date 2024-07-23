<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkebunan extends Model
{
    use HasFactory;

    protected $table = 'm_kebun';

    protected $fillable = [
        'nama_kebun',
        'alias',
        'aktif'
    ];

    public function afdelings()
    {
        return $this->hasMany(Afdeling::class, 'kebun_id');
    }
}

