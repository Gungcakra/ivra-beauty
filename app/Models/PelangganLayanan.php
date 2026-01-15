<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PelangganLayanan extends Model
{
    public $guarded = ['id'];

    public function reservasi()
    {
        return $this->belongsTo(Reservasi::class, 'id_reservasi');
    }

    public function pelanggan()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan');
    }

}
