<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $guarded = ['id'];

    public function pelanggan()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function layanans()
    {
        return $this->belongsToMany(Layanan::class, 'pelanggan_layanans', 'id_reservasi', 'id_layanan');
    }

    public function transaksi()
    {
        return $this->hasOne(Transaksi::class, 'id_reservasi');
    }
}
