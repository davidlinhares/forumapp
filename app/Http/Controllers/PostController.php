<?php

namespace App\Http\Controllers;

use Auth;
use App\Post, App\Topic, App\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $topics = Topic::all();
        return view('post.create', compact('topics'));
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->user_id = Auth::user()->id;
        $post->topic_id = $request->topic;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect()->route('post.show', compact('post'));
    }

    public function show(Post $post)
    {
        $comments = Comment::where('post_id', '=', $post->id)->orderBy('created_at', 'DESC')->get();
        return view('post.show', compact('post', 'comments'));
    }

    public function edit(Post $post)
    {
        $topics = Topic::all();
        return view('post.edit', compact('post', 'topics'));
    }

    public function update(Request $request, Post $post)
    {
        $post->topic_id = $request->topic;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect()->action('PostController@show', compact('post'));
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('home');
    }

    public function search(Request $request)
    {
        return $request;
    }
}
