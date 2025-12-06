<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $guarded = ['id'];

    public function reservasis()
    {
        return $this->hasMany(Reservasi::class);
    }
}
