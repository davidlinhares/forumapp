@extends('layouts.app')

@section('content')
<div class="card white hoverable">
  <div class="card-content">
    @if(count($post) > 0)
      <span class="card-title">{{ $post->title }}
        @if(Auth::user()->id == $post->user_id)
          <a href="#delete-post-modal" class="modal-trigger"><i class="material-icons red-text right">delete</i></a>
          <div id="delete-post-modal" class="modal bottom-sheet">
            <div class="modal-content">
              <h4>Delete Post</h4>
              <p>Do you really want to delete this post ?</p>
            </div>
            <form id="post-delete-{{$post->id}}" action="{{ route('post.destroy', compact('post')) }}" method="post">
              {{ csrf_field() }}
              <input name="_method" type="hidden" value="DELETE">
            </form>
            <div class="modal-footer">
              <button class="btn waves-effect red" type="submit" form="post-delete-{{$post->id}}">DELETE</button>
            </div>
          </div>
          <a href="{{ route('post.edit', compact('post')) }}"><i class="material-icons right">mode_edit</i></a>
        @endif
      </span>
      <p>{{ $post->content }}</p>
    @else
      <span class="card-title">Post not found</span>
      <p>The post you're looking for wasn't found. Please go back and look for it.</p>
    @endif
  </div>
</div>
<div class="card white hoverable">
  <div class="card-content">
    <form id="comment-create" action="{{ route('comment.store', compact('post')) }}" method="post">
      {{ csrf_field() }}
      <div class="row">
        <div class="input-field col s12">
          <textarea class="materialize-textarea" id="content" name="content"></textarea>
          <label for="content">Comment</label>
        </div>
        <div class="input-field col s12">
          <button class="btn pattern-navbar right" type="submit">COMMENT</button>
        </div>
      </div>
    </form>
  </div>
</div>
<p>Comments({{ count($comments) }})</p>
@if(count($comments) > 0)
  <ul class="collection hoverable">
    @foreach($comments as $comment)
      <li class="collection-item avatar">
        <img src="{{ URL::asset('images/default-post-open.png') }}" alt="" class="circle">
        <!--<span class="title">Title</span>-->
        <p>{{ $comment->content }}</p>
        <p>{{ $comment->updated_at->diffForHumans() }}</p>
        @if(Auth::user()->id === $comment->user_id)
          <p>
            <a href="#editComment{{$comment->id}}" class="blue-text modal-trigger">editar</a> ou <a href="#deleteComment{{$comment->id}}" class="red-text modal-trigger">deletar</a>
            <div id="editComment{{$comment->id}}" class="modal bottom-sheet">
              <div class="modal-content">
                <h4>Edit Post</h4>
                <form id="comment-edit" action="{{ route('comment.update', compact('post', 'comment')) }}" method="post">
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="input-field col s12">
                      <input name="_method" type="hidden" value="PATCH">
                      <textarea class="materialize-textarea" id="content" name="content">{{$comment->content}}</textarea>
                      <label for="content">Comment</label>
                    </div>
                    <div class="input-field col s12">
                      <button class="btn pattern-navbar right" type="submit">UPDATE</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div id="deleteComment{{$comment->id}}" class="modal bottom-sheet">
              <div class="modal-content">
                <h4>Delete Comment</h4>
                <p>Do you really want to delete this comment?</p>
              </div>
              <div class="modal-footer">
                <form id="comment-delete-{{$comment->id}}" action="{{ route('comment.destroy', compact('post', 'comment')) }}" method="post">
                  {{ csrf_field() }}
                  <input name="_method" type="hidden" value="DELETE">
                </form>
                <div class="modal-footer">
                  <button class="btn waves-effect red" type="submit" form="comment-delete-{{$comment->id}}">DELETE</button>
                </div>
              </div>
            </div>
          </p>
        @endif
      </li>
    @endforeach
  </ul>
@endif

<a href="{{ url()->previous() }}" class="waves-effect waves-light btn pattern-navbar hoverable"><i class="material-icons left">keyboard_arrow_left</i>Back</a>
@endsection
