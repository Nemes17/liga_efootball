<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    //
     public function consulta3(){
        $teams = Team::all();
        return $teams;
    }

    // Cada equipo con sus jugadores
    public function consulta4(){
        $teams = Team::with('players')->get();
        return $teams;
    }
}
