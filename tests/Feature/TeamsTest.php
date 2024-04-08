<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;
use App\Models\Team;

class TeamsTest extends TestCase
{

    /** @test */
    public function it_can_show_all_teams()
    {
        // Hit the endpoint to show all players
        $response = $this->get('/api/teams');

        // Assert response status
        $response->assertStatus(200);

        // Assert that the response contains the players data
        $response->assertJson([
            'success' => true,
        ]);
    }

    /** @test */
    public function it_can_show__team()
    {
        $response = $this->get('api/teams/1');

        // Assert response status
        $response->assertStatus(200);

        // Assert that the response contains the players data
        $response->assertJson([
            'success' => true,
        ]);

    }

}
