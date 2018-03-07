<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.header')
</head>
<body class="pattern-body">
    <div id="app">
      @include('layouts.navbar')
      <div class="container">
        <div class="row">
          @if (Route::has('login'))
              @auth
                  <div id="userinfo" class="col s12 m4 hide-on-med-and-down">
                      @include('layouts.userinfo')
                  </div>
                  <div id="content" class="col s12 m12 l8">
                      @yield('content')
                  </div>
              @else
                  <div id="content" class="col s12 m12">
                      @yield('content')
                  </div>
              @endauth
          @endif
        </div>
      </div>
    </div>
    @include('layouts.footer')
</body>
</html>
