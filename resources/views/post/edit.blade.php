@extends('layouts.app')

@section('content')
<div class="card-panel hoverable">
  @if(count($post) > 0)
    @if(auth()->user()->id === $post->user_id)
      <h2>Edit Post</h2>
      <form id="post-update" action="{{ route('post.update', compact('post')) }}" method="post">
        {{ csrf_field() }}
        <div class="row">
          <div class="input-field col s12">
            <input name="_method" type="hidden" value="PATCH">
            <input id="title" name="title" type="text" value="{{ $post->title }}">
            <label for="title">Title</label>
          </div>
          <div class="input-field col s12">
            <select id="topic" name="topic" form="post-update">
              <option value="" disabled selected>Choose the topic for your post</option>
              @foreach($topics as $topic)
                <option value="{{ $topic->id }}" {{$topic->id === $post->topic_id ? "selected" : ""}}>{{ $topic->name }}</option>
              @endforeach
            </select>
            <label for="manager">Topic</label>
          </div>
          <div class="input-field col s12">
            <textarea class="materialize-textarea" id="content" name="content">{{ $post->content }}</textarea>
            <label for="content">Content</label>
          </div>
          <div class="input-field col s12">
            <button class="btn pattern-navbar right" type="submit">SAVE</button>
          </div>
        </div>
      </form>
    @else
      <span class="card-title">Permission denied!</span>
      <p>You don't have the required permission for this action.</p>
    @endif
  @else
    <span class="card-title">Post not found</span>
    <p>The post you're looking for wasn't found. Please go back and look for it.</p>
  @endif
</div>
<a href="{{ url()->previous() }}" class="waves-effect waves-light btn pattern-navbar hoverable"><i class="material-icons left">keyboard_arrow_left</i>Back</a>
@endsection
