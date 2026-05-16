<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goal; 

class GoalController extends Controller
{
    //
    public function consulta9(){
        $goals = Goal::all();
        return $goals;
    }

    
    public function consulta10(){
        $goals = Goal::with('player', 'game')->get();
        return $goals;
    }
}
