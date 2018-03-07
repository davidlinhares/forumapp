@extends('layouts.app')

@section('content')
<div class="col s12 m12 hide-on-small-and-down">
  <div class="card horizontal">
    <div class="card-image">
      <img src="images/default-home-logo-horizontal.jpg">
      <span class="card-title">forumapp</span>
    </div>
    <div class="card-content">
      <p>Welcome to forumapp.</p>
      <p>A place for you to share posts based on community topics.</p>
      <p><a href="{{ route('login') }}">Login</a> or <a href="{{ route('register') }}">Register</a> and join a milion of thinkers and share your thoughts.</p>
    </div>
  </div>
</div>
<div class="col s12 m12 hide-on-med-and-up">
  <div class="card">
    <div class="card-image">
      <img src="images/default-home-logo-vertical.jpg">
      <span class="card-title">forumapp</span>
    </div>
    <div class="card-content">
      <p>Welcome to forumapp.</p>
      <p>A place for you to share posts based on community topics.</p>
      <p><a href="{{ route('login') }}">Login</a> or <a href="{{ route('register') }}">Register</a> and join a milion of thinkers and share your thoughts.</p>
    </div>
  </div>
</div>
@endsection
