<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function getComments($slug)
    {
        $comments = Comment::where('slug', $slug)->get();

        return response()->json($comments);
    }

    public function postComment(Request $request)
    {
        $comment = Comment::create($request->all());

        return response()->json($comment);
    }
}
