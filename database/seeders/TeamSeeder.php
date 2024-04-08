<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('teams')->insert([
                'naam' => 'Wolves',
                'datumopgericht' => '20-01-2013',
                'competitie' => 'Premier League', // Example: You can adjust this as needed
            ]);

            DB::table('teams')->insert([
                'naam' => 'Manchester United',
                'datumopgericht' => '20-01-2013',
                'competitie' => 'Premier League', // Example: You can adjust this as needed
            ]);

            DB::table('teams')->insert([
                'naam' => 'Arsanal',
                'datumopgericht' => '20-01-2013',
                'competitie' => 'Premier League', // Example: You can adjust this as needed
            ]);

            DB::table('teams')->insert([
                'naam' => 'Chelsea',
                'datumopgericht' => '20-01-2013',
                'competitie' => 'Premier League', // Example: You can adjust this as needed
            ]);

            DB::table('teams')->insert([
                'naam' => 'Barcelona',
                'datumopgericht' => '20-01-2013',
                'competitie' => 'La Liga', // Example: You can adjust this as needed
            ]);

            DB::table('teams')->insert([
                'naam' => 'Valencia',
                'datumopgericht' => '20-01-2013',
                'competitie' => 'La Liga', // Example: You can adjust this as needed
            ]);

            DB::table('teams')->insert([
                'naam' => 'Atlehico Madrid',
                'datumopgericht' => '20-01-2013',
                'competitie' => 'La Liga', // Example: You can adjust this as needed
            ]);
    }
}
