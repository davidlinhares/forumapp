<div class="card hoverable">
  <div class="card-image">
    <img src="{{ URL::asset('images/default-user-banner.jpg') }}">
    <span class="card-title">{{ Auth::user()->username }}</span>
  </div>
  <div class="card-content">
    <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
    <p><strong>E-mail:</strong> {{ Auth::user()->email }}</p>
  </div>
</div>
<hr>
<a href="{{ route('post.create') }}" class="btn pattern-navbar full-width hoverable">Create a post</a>
