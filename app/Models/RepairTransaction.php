<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairTransaction extends Model
{
    use HasFactory;
    protected $table = 't_repair_transaction';

    protected $fillable = [
        'keterangan',
        'harga_sparepart',
        'harga_ban',
        'harga_perbaikan',
        'harga_bbm',
        'total_harga_keseluruhan',
        'mobil_id',
        'tanggal_perbaikan'
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->total_harga_keseluruhan = 
                $model->harga_sparepart + 
                $model->harga_ban + 
                $model->harga_perbaikan +
                $model->harga_bbm;
        });

        static::updating(function ($model) {
            $model->total_harga_keseluruhan = 
                $model->harga_sparepart + 
                $model->harga_ban + 
                $model->harga_perbaikan +
                $model->harga_bbm;
        });
    }

    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'mobil_id');
    }
}
