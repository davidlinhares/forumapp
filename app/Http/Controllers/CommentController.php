<?php

namespace App\Http\Controllers;

use Auth;
use App\Comment, App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request, Post $post)
    {
        $comment = new Comment();
        $comment->user_id = Auth::user()->id;
        $comment->post_id = $post->id;
        $comment->content = $request->content;
        $comment->save();
        return redirect()->route('post.show', compact('post'));
    }

    public function show(Comment $comment)
    {
        //
    }

    public function edit(Comment $comment)
    {
        //
    }

    public function update(Request $request, Post $post, Comment $comment)
    {
        $comment->content = $request->content;
        $comment->save();
        return redirect()->route('post.show', compact('post'));
    }

    public function destroy(Post $post, Comment $comment)
    {
        $comment->delete();
        return redirect()->route('post.show', compact('post'));
    }
}
