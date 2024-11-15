<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Pokemon;

class PokemonSeeder extends Seeder
{
    public function run()
    {
        // API-Aufruf für die ersten 150 Pokémon
        $response = Http::get('https://pokeapi.co/api/v2/pokemon?limit=150');

        if ($response->successful()) {
            $pokemons = $response->json()['results'];

            foreach ($pokemons as $pokemonData) {
                // Detaildaten für jedes Pokémon holen
                $pokemonDetail = Http::get($pokemonData['url'])->json();

                Pokemon::create([
                    'name' => $pokemonDetail['name'],
                    'height' => $pokemonDetail['height'],
                    'weight' => $pokemonDetail['weight'],
                    'types' => json_encode(array_column($pokemonDetail['types'], 'type')),
                    'sprite' => $pokemonDetail['sprites']['front_default'],
                ]);
            }
        }
    }
}

