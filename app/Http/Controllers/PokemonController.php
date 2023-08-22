<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PokemonesFavoritos;
use Illuminate\Support\Facades\DB;

class PokemonController extends Controller
{


    public function fetchLikedPokemons($user_id){
        return $pokemons = PokemonesFavoritos::where('user_id', $user_id)->get();
    }
 

    public function likePokemon(Request $request, $user_id, $poke_id){

        $likedPokemon = PokemonesFavoritos::where([["user_id",  $user_id], ["pokemon_id", $poke_id]])->get();

        $likedPokemons = PokemonesFavoritos::where("user_id", $user_id)->get();
        $numberOfLiked = $likedPokemons->count();

        if($likedPokemon->count() > 0 ){
            return "Ya añadiste este pokemon.";
            ;
        }
        
        
        else{
            $pokemon= new PokemonesFavoritos();

            $pokemon->pokemon_id = $request->pokemon['pokemon_id'];
            $pokemon->name = $request->pokemon['name'];
            $pokemon->user_id = $request->pokemon['user_id'];

            $pokemon->save();
 

            return "Nuevo Favorito ".$request->pokemon["name"];
          
        }

    }

   
    public function checkIfLiked($poke_id){
        $likedPokemon = PokemonesFavoritos::where("pokemon_id", $poke_id)->get();

        if($likedPokemon->count() > 0 ){
            return true;
        }

        return false;
    }
 

}
