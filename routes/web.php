<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokedexController;

Route::get('/', [PokedexController::class, 'index']); // Zeigt die Liste der Pokémon
Route::get('pokemon/{id}', [PokedexController::class, 'show']); // Zeigt Details eines einzelnen Pokémon


