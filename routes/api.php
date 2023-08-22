<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PokemonController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout']);

 
Route::prefix('/pokemons')->group(function(){
    Route::get('/likes/{user_id}', [PokemonController::class, 'fetchLikedPokemons']); 
    Route::post('/like/{user_id}/{poke_id}', [PokemonController::class, 'likePokemon']); 
    Route::get('/checkLike/{poke_id}', [PokemonController::class, 'checkIfLiked']); 
});


 