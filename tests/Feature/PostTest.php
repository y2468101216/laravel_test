<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPostCreate()
    {
        $response = $this->post('api/v1/post', [
            'title' => 'test',
            'content' => 'test'
        ]);

        $response->assertStatus(200);
    }
}
