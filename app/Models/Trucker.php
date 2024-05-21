<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trucker extends Model
{
    use HasFactory;

    public function packages(){
        return $this->hasMany('App\Models\Package');
    }

    public function trucks(){
        return $this->belongsToMany('App\Models\Truck');
    }
}
