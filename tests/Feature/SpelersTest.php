<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;
use App\Models\Speler;

class SpelersTest extends TestCase
{

    /** @test */
    public function it_can_show_all_players()
    {
        // Hit the endpoint to show all players
        $response = $this->get('/api/spelers');

        // Assert response status
        $response->assertStatus(200);

        // Assert that the response contains the players data
        $response->assertJson([
            'success' => true,
        ]);
    }

    /** @test */
    public function it_can_show__player()
    {
        $response = $this->get('api/spelers/1');

        // Assert response status
        $response->assertStatus(200);

        // Assert that the response contains the players data
        $response->assertJson([
            'success' => true,
        ]);

    }

    /** @test */
    public function it_can_add_a_player()
    {
        $playerData = [
            "naam" => "Jaap",
            "teamsid" => 5,
            "nationaliteit" => "Dutch"
        ];

        // Hit the endpoint to add a player
        $response = $this->json('POST', '/api/spelers', $playerData);

        // Assert response status
        $response->assertStatus(201);

        // Assert that the response contains the newly created player data
        $response->assertJson([
            'success' => true,
            'data' => $playerData,
        ]);
    }

    /** @test */
    public function it_can_delete_a_player()
    {
        $spelerid = 4;
        // Hit the endpoint to delete the player
        $response = $this->delete("/api/spelers/{$spelerid}");

        // Assert response status
        $response->assertStatus(200);

        // Assert that the response contains the success message
        $response->assertJson([
            'success' => true,
            'message' => 'Speler verwijderd',
        ]);

    }
}
