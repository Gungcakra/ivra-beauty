<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class,'id_user');
    }

    public function reservasis()
    {
        return $this->hasMany(Reservasi::class, 'id_user', 'id');
    }
}
