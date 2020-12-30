<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuImage extends Model
{
    use HasFactory;

    public function Menu()
    {
        return $this->belongsTo('App\Models\Menu');
    }
}
