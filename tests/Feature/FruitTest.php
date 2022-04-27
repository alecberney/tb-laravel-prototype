<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FruitTest extends TestCase
{
    use RefreshDatabase;

    public function test_fruits_post_successfull()
    {
        $this->postJson('/api/fruits', [
            'name' => 'Apple',
            'weight' => 0.5
        ])
        ->assertStatus(201)
        ->assertJson([
            'data' => [
                'name' => 'Apple',
                'weight' => 0.5
            ]
        ]);
    }

    public function test_fruits_get_successfull()
    {
        // Adding a fruit
        $this->post('/fruits', [
            'name' => 'Apple',
            'weight' => 0.5
        ]);

        $this->get('/api/fruits')
        ->assertStatus(200);
        /*->assertJson([
            'data' => [
                'name' => 'Apple',
                'weight' => 0.5
            ]
        ]);*/
    }
}
