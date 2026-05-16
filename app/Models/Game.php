<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    public function goals(){
        return $this->hasMany('App\Models\Goal');
    }
      public function teams(){
        return $this->belongsToMany('App\Models\Team');
    }

}
