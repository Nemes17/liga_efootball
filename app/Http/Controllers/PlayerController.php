<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    //
    public function consulta5(){
        $players = Player::all();
        return $players;
    }

    
    public function consulta6(){
        $players = Player::with('goals')->get();
        return $players;
    }
}
