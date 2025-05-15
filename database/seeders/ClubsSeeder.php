<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Club;

class ClubsSeeder extends Seeder
{
    public function run()
    {
        $clubs = [
            // 🇳🇱 Eredivisie
            ['naam' => 'Ajax', 'land' => 'Nederland', 'competitie' => 'Eredivisie'],
            ['naam' => 'Almere City', 'land' => 'Nederland', 'competitie' => 'Eredivisie'],
            ['naam' => 'AZ', 'land' => 'Nederland', 'competitie' => 'Eredivisie'],
            ['naam' => 'Feyenoord', 'land' => 'Nederland', 'competitie' => 'Eredivisie'],
            ['naam' => 'Fortuna Sittard', 'land' => 'Nederland', 'competitie' => 'Eredivisie'],
            ['naam' => 'Go Ahead Eagles', 'land' => 'Nederland', 'competitie' => 'Eredivisie'],
            ['naam' => 'Groningen', 'land' => 'Nederland', 'competitie' => 'Eredivisie'],
            ['naam' => 'Heerenveen', 'land' => 'Nederland', 'competitie' => 'Eredivisie'],
            ['naam' => 'Heracles Almelo', 'land' => 'Nederland', 'competitie' => 'Eredivisie'],
            ['naam' => 'NAC Breda', 'land' => 'Nederland', 'competitie' => 'Eredivisie'],
            ['naam' => 'NEC', 'land' => 'Nederland', 'competitie' => 'Eredivisie'],
            ['naam' => 'PEC Zwolle', 'land' => 'Nederland', 'competitie' => 'Eredivisie'],
            ['naam' => 'PSV Eindhoven', 'land' => 'Nederland', 'competitie' => 'Eredivisie'],
            ['naam' => 'RKC Waalwijk', 'land' => 'Nederland', 'competitie' => 'Eredivisie'],
            ['naam' => 'Sparta Rotterdam', 'land' => 'Nederland', 'competitie' => 'Eredivisie'],
            ['naam' => 'Twente', 'land' => 'Nederland', 'competitie' => 'Eredivisie'],
            ['naam' => 'Utrecht', 'land' => 'Nederland', 'competitie' => 'Eredivisie'],
            ['naam' => 'Willem II', 'land' => 'Nederland', 'competitie' => 'Eredivisie'],

            // 🏴 Premier League
            ['naam' => 'Arsenal', 'land' => 'Engeland', 'competitie' => 'Premier League'],
            ['naam' => 'Aston Villa', 'land' => 'Engeland', 'competitie' => 'Premier League'],
            ['naam' => 'Bournemouth', 'land' => 'Engeland', 'competitie' => 'Premier League'],
            ['naam' => 'Brentford', 'land' => 'Engeland', 'competitie' => 'Premier League'],
            ['naam' => 'Brighton & Hove Albion', 'land' => 'Engeland', 'competitie' => 'Premier League'],
            ['naam' => 'Chelsea', 'land' => 'Engeland', 'competitie' => 'Premier League'],
            ['naam' => 'Crystal Palace', 'land' => 'Engeland', 'competitie' => 'Premier League'],
            ['naam' => 'Everton', 'land' => 'Engeland', 'competitie' => 'Premier League'],
            ['naam' => 'Fulham', 'land' => 'Engeland', 'competitie' => 'Premier League'],
            ['naam' => 'Ipswich Town', 'land' => 'Engeland', 'competitie' => 'Premier League'],
            ['naam' => 'Leicester City', 'land' => 'Engeland', 'competitie' => 'Premier League'],
            ['naam' => 'Liverpool', 'land' => 'Engeland', 'competitie' => 'Premier League'],
            ['naam' => 'Luton Town', 'land' => 'Engeland', 'competitie' => 'Premier League'],
            ['naam' => 'Manchester City', 'land' => 'Engeland', 'competitie' => 'Premier League'],
            ['naam' => 'Manchester United', 'land' => 'Engeland', 'competitie' => 'Premier League'],
            ['naam' => 'Newcastle United', 'land' => 'Engeland', 'competitie' => 'Premier League'],
            ['naam' => 'Nottingham Forest', 'land' => 'Engeland', 'competitie' => 'Premier League'],
            ['naam' => 'Sheffield United', 'land' => 'Engeland', 'competitie' => 'Premier League'],
            ['naam' => 'Tottenham Hotspur', 'land' => 'Engeland', 'competitie' => 'Premier League'],
            ['naam' => 'West Ham United', 'land' => 'Engeland', 'competitie' => 'Premier League'],

            // 🇪🇸 La Liga
            ['naam' => 'Alavés', 'land' => 'Spanje', 'competitie' => 'La Liga'],
            ['naam' => 'Almería', 'land' => 'Spanje', 'competitie' => 'La Liga'],
            ['naam' => 'Athletic Bilbao', 'land' => 'Spanje', 'competitie' => 'La Liga'],
            ['naam' => 'Atlético Madrid', 'land' => 'Spanje', 'competitie' => 'La Liga'],
            ['naam' => 'Barcelona', 'land' => 'Spanje', 'competitie' => 'La Liga'],
            ['naam' => 'Cádiz', 'land' => 'Spanje', 'competitie' => 'La Liga'],
            ['naam' => 'Celta de Vigo', 'land' => 'Spanje', 'competitie' => 'La Liga'],
            ['naam' => 'Elche', 'land' => 'Spanje', 'competitie' => 'La Liga'],
            ['naam' => 'Espanyol', 'land' => 'Spanje', 'competitie' => 'La Liga'],
            ['naam' => 'Getafe', 'land' => 'Spanje', 'competitie' => 'La Liga'],
            ['naam' => 'Girona', 'land' => 'Spanje', 'competitie' => 'La Liga'],
            ['naam' => 'Granada', 'land' => 'Spanje', 'competitie' => 'La Liga'],
            ['naam' => 'Las Palmas', 'land' => 'Spanje', 'competitie' => 'La Liga'],
            ['naam' => 'Mallorca', 'land' => 'Spanje', 'competitie' => 'La Liga'],
            ['naam' => 'Osasuna', 'land' => 'Spanje', 'competitie' => 'La Liga'],
            ['naam' => 'Rayo Vallecano', 'land' => 'Spanje', 'competitie' => 'La Liga'],
            ['naam' => 'Real Betis', 'land' => 'Spanje', 'competitie' => 'La Liga'],
            ['naam' => 'Real Madrid', 'land' => 'Spanje', 'competitie' => 'La Liga'],
            ['naam' => 'Real Sociedad', 'land' => 'Spanje', 'competitie' => 'La Liga'],
            ['naam' => 'Sevilla', 'land' => 'Spanje', 'competitie' => 'La Liga'],

            // 🇮🇹 Serie A
            ['naam' => 'Atalanta', 'land' => 'Italië', 'competitie' => 'Serie A'],
            ['naam' => 'Bologna', 'land' => 'Italië', 'competitie' => 'Serie A'],
            ['naam' => 'Cagliari', 'land' => 'Italië', 'competitie' => 'Serie A'],
            ['naam' => 'Como', 'land' => 'Italië', 'competitie' => 'Serie A'],
            ['naam' => 'Empoli', 'land' => 'Italië', 'competitie' => 'Serie A'],
            ['naam' => 'Fiorentina', 'land' => 'Italië', 'competitie' => 'Serie A'],
            ['naam' => 'Genoa', 'land' => 'Italië', 'competitie' => 'Serie A'],
            ['naam' => 'Hellas Verona', 'land' => 'Italië', 'competitie' => 'Serie A'],
            ['naam' => 'Internazionale', 'land' => 'Italië', 'competitie' => 'Serie A'],
            ['naam' => 'Juventus', 'land' => 'Italië', 'competitie' => 'Serie A'],
            ['naam' => 'Lazio', 'land' => 'Italië', 'competitie' => 'Serie A'],
            ['naam' => 'Lecce', 'land' => 'Italië', 'competitie' => 'Serie A'],
            ['naam' => 'AC Milan', 'land' => 'Italië', 'competitie' => 'Serie A'],
            ['naam' => 'Monza', 'land' => 'Italië', 'competitie' => 'Serie A'],
            ['naam' => 'Napoli', 'land' => 'Italië', 'competitie' => 'Serie A'],
            ['naam' => 'Parma', 'land' => 'Italië', 'competitie' => 'Serie A'],
            ['naam' => 'Roma', 'land' => 'Italië', 'competitie' => 'Serie A'],
            ['naam' => 'Torino', 'land' => 'Italië', 'competitie' => 'Serie A'],
            ['naam' => 'Udinese', 'land' => 'Italië', 'competitie' => 'Serie A'],
            ['naam' => 'Venezia', 'land' => 'Italië', 'competitie' => 'Serie A'],

            // 🇩🇪 Bundesliga
            ['naam' => 'FC Augsburg', 'land' => 'Duitsland', 'competitie' => 'Bundesliga'],
            ['naam' => 'Union Berlin', 'land' => 'Duitsland', 'competitie' => 'Bundesliga'],
            ['naam' => 'VfL Bochum', 'land' => 'Duitsland', 'competitie' => 'Bundesliga'],
            ['naam' => 'Werder Bremen', 'land' => 'Duitsland', 'competitie' => 'Bundesliga'],
            ['naam' => 'Borussia Dortmund', 'land' => 'Duitsland', 'competitie' => 'Bundesliga'],
            ['naam' => 'Eintracht Frankfurt', 'land' => 'Duitsland', 'competitie' => 'Bundesliga'],
            ['naam' => 'SC Freiburg', 'land' => 'Duitsland', 'competitie' => 'Bundesliga'],
            ['naam' => '1. FC Heidenheim', 'land' => 'Duitsland', 'competitie' => 'Bundesliga'],
            ['naam' => 'TSG Hoffenheim', 'land' => 'Duitsland', 'competitie' => 'Bundesliga'],
            ['naam' => 'Holstein Kiel', 'land' => 'Duitsland', 'competitie' => 'Bundesliga'],
            ['naam' => 'RB Leipzig', 'land' => 'Duitsland', 'competitie' => 'Bundesliga'],
            ['naam' => 'Bayer Leverkusen', 'land' => 'Duitsland', 'competitie' => 'Bundesliga'],
            ['naam' => 'Mainz 05', 'land' => 'Duitsland', 'competitie' => 'Bundesliga'],
            ['naam' => 'Borussia Mönchengladbach', 'land' => 'Duitsland', 'competitie' => 'Bundesliga'],
            ['naam' => 'Bayern München', 'land' => 'Duitsland', 'competitie' => 'Bundesliga'],
            ['naam' => 'FC St. Pauli', 'land' => 'Duitsland', 'competitie' => 'Bundesliga'],
            ['naam' => 'VfB Stuttgart', 'land' => 'Duitsland', 'competitie' => 'Bundesliga'],
            ['naam' => 'VfL Wolfsburg', 'land' => 'Duitsland', 'competitie' => 'Bundesliga'],
        ];

        foreach ($clubs as $club) {
            Club::create($club);
        }
    }
}
