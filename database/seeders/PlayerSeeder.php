<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Assuming you have a 'teams' table with IDs already populated

        // Inserting players with corresponding team IDs
        DB::table('spelers')->insert([
            'naam' => 'James',
            'teamsid' => '5', // Assuming this team ID exists in the 'teams' table
            'nationaliteit' => 'Dutch',
        ]);

        DB::table('spelers')->insert([
            'naam' => 'Geert',
            'teamsid' => '4',
            'nationaliteit' => 'Dutch',
        ]);

        DB::table('spelers')->insert([
            'naam' => 'Jacob',
            'teamsid' => '3',
            'nationaliteit' => 'Dutch',
        ]);

        DB::table('spelers')->insert([
            'naam' => 'Denzel',
            'teamsid' => '6',
            'nationaliteit' => 'Pols',
        ]);

        DB::table('spelers')->insert([
            'naam' => 'Dumfries',
            'teamsid' => '1',
            'nationaliteit' => 'French',
        ]);
    }
}
