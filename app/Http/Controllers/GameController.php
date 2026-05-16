<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    //
    public function consulta7(){
        $games = Game::all();
        return $games;
    }

    // Cada partido con los equipos que jugaron
    public function consulta8(){
        $games = Game::with('teams')->get();
        return $games;
    }
}
