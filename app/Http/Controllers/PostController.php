<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCreateRequest;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(PostCreateRequest $request)
    {
        $post = new Post();
        $post->title = $request->input('title', '');
        $post->content = $request->input('content', '');
        $post->save();

        return response()->json($post);
    }
}
