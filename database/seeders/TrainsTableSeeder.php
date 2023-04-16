<?php

namespace Database\Seeders;

use App\Models\train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        $trainStation = [
            'Milano Centrale',
            'Roma Termini',
            'Napoli Centrale',
            'Torino Porta Nuova',
            'Firenze Santa Maria Novella',
            'Bologna Centrale',
            'Venezia Santa Lucia',
            'Verona Porta Nuova',
            'Genova Piazza Principe',
            'Palermo Centrale',
            'Bari Centrale',
            'Catania Centrale',
            'Brescia',
            'Caserta',
            'Como San Giovanni',
            'Cosenza',
            'Foggia',
            'Grosseto',
            'La Spezia Centrale',
            'Lecce',
            'Livorno Centrale',
            'Mantova',
            'Messina Centrale',
            'Pescara Centrale',
            'Reggio Calabria Centrale',
            'Salerno',
            'Savona',
            'Siena',
            'Siracusa',
            'Trento',
            'Trieste Centrale',
            'Udine',
            'Varese',
            'Vicenza',
            'Rovigo'];
        
        for ($i = 0; $i < 200; $i++) {

            $new_train = new train();
            $new_train -> azienda = $faker-> company();
            $new_train ->stazione_partenza = $faker->randomElement($trainStation);
            $new_train->stazione_arrivo = $faker->randomElement($trainStation);
            $new_train->orario_partenza = $faker->time();
            $new_train->orario_arrivo = $faker->time();
            $new_train->codice_treno = $faker->bothify('???###-?#');
            $new_train->numero_carrozze = $faker->numberBetween(5, 25);
            $new_train->save();
        }
    }
}
