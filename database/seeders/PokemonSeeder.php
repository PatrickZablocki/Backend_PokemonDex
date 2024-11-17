<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PokemonSeeder extends Seeder
{
    public function run()
    {
        // Die ersten 151 Pokémon abrufen
        for ($i = 1; $i <= 1025; $i++) {
            // API-Anfrage an die PokeAPI für jedes Pokémon
            $pokemon = Http::get("https://pokeapi.co/api/v2/pokemon/{$i}")->json();

            // Daten in die Datenbank einfügen
            DB::table('pokemons')->insert([
                'name' => $pokemon['name'],
                'hp' => rand(30, 100),
                'attack' => rand(40, 100),
                'defense' => rand(30, 100),
                'speed' => rand(50, 150),
            ]);
        }

        echo "Alle 1025 Pokémons wurden erfolgreich hinzugefügt.\n";
    }
}
