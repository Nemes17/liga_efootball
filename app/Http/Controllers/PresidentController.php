<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\President;

class PresidentController extends Controller
{
    //
     public function consulta1(){
        $presidents = President::all();
        return $presidents;
    }

    // Cada presidente con su equipo
    public function consulta2(){
        $presidents = President::with('team')->get();
        return $presidents;
    }
}
