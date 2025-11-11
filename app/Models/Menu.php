<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class Menu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function children()
    {
        return $this->hasMany(Menu::class, 'parrent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parrent_id');
    }

    public function permission()
    {
        return $this->belongsTo(Permission::class);
    }
}
