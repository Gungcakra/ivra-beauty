<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservasiLayanan extends Model
{
    public $guarded = ['id'];

    public function reservasi()
    {
        return $this->belongsTo(Reservasi::class, 'id_reservasi');
    }

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan');
    }

}
