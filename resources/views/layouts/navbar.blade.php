<!--BEGIN NAVBAR-->
<div class="navbar-fixed">
  <nav class="pattern-navbar" role="navigation">
    <div class="nav-wrapper container">
      <a href="{{ url('/') }}" class="brand-logo">{{ config('app.name') }}</a>
      <a href="#" data-activates="sidenav" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        @if (Route::has('login'))
            @auth
                <li><a class="dropdown-button" href="#!" data-activates="user-options">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                <ul id="user-options" class="dropdown-content">
                  <li><a href="#!">Profile</a></li>
                  <li class="divider"></li>
                  <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                  </li>
                </ul>
            @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @endauth
        @endif
      </ul>
      <ul id="sidenav" class="side-nav">
        @if (Route::has('login'))
          @auth
            <div class="user-view">
              <div class="background">
                <img class="responsive-img" src="{{ URL::asset('images/default-user-banner.jpg') }}">
              </div>
              <a href="#!user"><img class="responsive-img menu-icon circle white" src="{{ URL::asset('images/default-user.png') }}"/></a>
              <a href="#!name"><span class="white-text name">{{ auth()->user()->name }}</span></a>
              <a href="#!email"><span class="white-text email">{{ auth()->user()->email }}</span></a>
            </div>
            <li><a href="#!">Profile</a></li>
            <li><a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form></li>
          @else
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
          @endauth
        @endif
      </ul>
    </div>
  </nav>
</div>
<!--END NAVBAR-->
