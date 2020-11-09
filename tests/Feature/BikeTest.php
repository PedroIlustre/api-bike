<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BikeTest extends TestCase
{
    /** @test */
    public function checkIfBikeListRoutIsCorrect()
    {
        $response = $this->get('/api/list')
            ->assertStatus(200);
    }

    /** @test */
    public function checkIfBikeListRoutIsNotCorrect()
    {
        $response = $this->get('/api/list2')
            ->assertStatus(404);
    }

}
