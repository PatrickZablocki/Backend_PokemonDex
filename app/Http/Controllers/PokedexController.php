<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class PokedexController extends Controller
{
    // API-Aufruf, um die ersten 150 Pokémon zu holen
    public function index()
    {
        $res = Http::get('https://pokeapi.co/api/v2/pokemon?limit=150');

        // Pokemon Daten an die View übergeben
        return view('pokedex', [
            'pokemons' => $res->json()['results']
        ]);
    }

    public function show($id)
    {
        $res = Http::get("https://pokeapi.co/api/v2/pokemon/{$id}");

        return view('pokemonDetails', [
            'pokemon' => $res->json()
        ]);
    }
}
