<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function genre()
    {
        return $this->belongsTo('App\Models\Genre');
    }

    public function recipes()
    {
        return $this->hasMany('App\Models\Recipe');
    }

    public function menuImages()
    {
        return $this->hasMany('App\Models\MenuImage');
    }
}
