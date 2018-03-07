@extends('layouts.app')

@section('content')
<div class="card-panel hoverable">
  <h2>Create Post</h2>
  <form id="post-create" action="{{ route('post.store') }}" method="post">
    {{ csrf_field() }}
    <div class="row">
      <div class="input-field col s12">
        <input id="title" name="title" type="text">
        <label for="title">Title</label>
      </div>
      <div class="input-field col s12">
        <select id="topic" name="topic" form="post-create">
          <option value="" disabled selected>Choose the topic for your post</option>
          @foreach($topics as $topic)
            <option value="{{ $topic->id }}">{{ $topic->name }}</option>
          @endforeach
        </select>
        <label for="manager">Topic</label>
      </div>
      <div class="input-field col s12">
        <textarea class="materialize-textarea" id="content" name="content"></textarea>
        <label for="content">Content</label>
      </div>
      <div class="input-field col s12">
        <button class="btn pattern-navbar right" type="submit">SAVE</button>
      </div>
    </div>
  </form>
</div>
<a href="{{ url()->previous() }}" class="waves-effect waves-light btn pattern-navbar hoverable"><i class="material-icons left">keyboard_arrow_left</i>Back</a>
@endsection
