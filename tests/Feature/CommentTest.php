<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CommentTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPostCreate()
    {

        $response = $this->post('api/v1/comment', [
            'message' => 'test2',
            'post_id' => 1
        ]);

        $response->assertStatus(200);
    }
}
