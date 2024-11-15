<php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreatePokemonsTable extends Migration
{
    public function up()
    {
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id(); // Automatische ID
            $table->string('name'); // Name des Pokémon
            $table->integer('height')->nullable(); // Größe
            $table->integer('weight')->nullable(); // Gewicht
            $table->json('types')->nullable(); // Typen als JSON speichern
            $table->string('sprite')->nullable(); // Sprite-URL
            $table->timestamps(); // Erstellungs- und Aktualisierungszeiten
        });
    }

    public function down()
    {
        Schema::dropIfExists('pokemons');
    }
}
