<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Speler;
use App\Models\Club;
use Faker\Factory as Faker;

class SpelersSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $clubs = Club::all();

        foreach ($clubs as $club) {
            for ($i = 0; $i < 20; $i++) {
                Speler::create([
                    'naam' => $faker->name, 
                    'leeftijd' => $faker->numberBetween(18, 35),
                    'positie' => $faker->randomElement(['Doelman', 'Verdediger', 'Middenvelder', 'Aanvaller']),
                    'club_id' => $club->id,
                ]);
            }
        }
    }
}
