<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $guarded = ['id'];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class,'id_user');
    }

    public function layanan()
    {
        return $this->belongsTo(Layanan::class,'id_layanan');
    }

    public function transaksi()
    {
        return $this->hasOne(Transaksi::class,'id_reservasi');
    }
    
}
