@extends('layouts.app')

@section('content')
<h3>Topics</h3>
<ul class="collection hoverable">
  @if(count($topics) > 0)
    @foreach($topics as $topic)
      <li class="collection-item avatar">
        <img src="images/default-topic.png" alt="" class="circle">
        <span class="title bold">{{ $topic->name }}</span>
        <p>{{ $topic->description }}</p>
        <a href="{{ route('topic.index', $topic->id) }}" class="secondary-content"><i class="material-icons">arrow_forward</i></a>
      </li>
    @endforeach
  @else
    <li class="collection-item avatar">
      <img src="images/default-topic.png" alt="" class="circle">
      <span class="title bold">No topics found</span>
      <p>Send us a ticket</p>
      <a href="#!" class="secondary-content"><i class="material-icons">arrow_forward</i></a>
    </li>
  @endif
</ul>
@endsection
