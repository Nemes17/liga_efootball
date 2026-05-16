<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PresidentController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GoalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    
});
Route::get('consulta1', [PresidentController::class, 'consulta1']);
Route::get('consulta2', [PresidentController::class, 'consulta2']);
Route::get('consulta3', [TeamController::class, 'consulta3']);
Route::get('consulta4', [TeamController::class, 'consulta4']);
Route::get('consulta5', [PlayerController::class, 'consulta5']);
Route::get('consulta6', [PlayerController::class, 'consulta6']);
Route::get('consulta7', [GameController::class, 'consulta7']);
Route::get('consulta8', [GameController::class, 'consulta8']);
Route::get('consulta9', [GoalController::class, 'consulta9']);
Route::get('consulta10', [GoalController::class, 'consulta10']);
