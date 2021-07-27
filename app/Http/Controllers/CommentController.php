<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentCreateRequest;
use App\Models\comment;

class CommentController extends Controller
{
    public function create(CommentCreateRequest $request)
    {
        $comment = new comment();
        $comment->message = $request->input('message', '');
        $comment->post_id = $request->input('post_id', '');
        $comment->save();

        return response()->json($comment);
    }
}
