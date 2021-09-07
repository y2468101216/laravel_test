<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CommentTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPostCreate()
    {
        $post = new Post();
        $post->title = 'test';
        $post->content = 'test';
        $post->save();

        $response = $this->post('api/v1/comment', [
            'message' => 'test2',
            'post_id' => $post->id
        ]);

        $response->assertStatus(200);
    }
}
