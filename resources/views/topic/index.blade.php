@extends('layouts.app')

@section('content')
<h3>Posts</h3>
<ul class="collection hoverable">
  @if(count($posts) > 0)
    @foreach($posts as $post)
      <li class="collection-item avatar">
        <img src="{{ URL::asset('images/default-post-notopen.png') }}" alt="" class="circle">
        <span class="title bold">{{ $post->title }}</span>
        <p>Read more</p>
        <a href="{{ route('post.show', $post->id) }}" class="secondary-content"><i class="material-icons">arrow_forward</i></a>
      </li>
    @endforeach
  @else
    <li class="collection-item avatar">
      <img src="{{ URL::asset('images/default-error.png') }}" alt="" class="circle">
      <span class="title bold">No posts found</span>
      <p>May you be the #first?</p>
    </li>
  @endif
</ul>
<a href="{{ url()->previous() }}" class="waves-effect waves-light btn pattern-navbar"><i class="material-icons left">keyboard_arrow_left</i>Back</a>
@endsection
