@extends('layouts.app')

@section('content')
<div class="login_div">
  <div class="login_form">
    <form id="loginform" name="loginform" method="POST" action="{{ route('login') }}">
      {{ csrf_field() }}
      <div class="card hoverable">
        <div class="card-header-logo pattern-navbar center">
          <div class="row no-margin">
            <div class="col s12 m12">
              <h3 class="pattern-navbar-text">Login</h3>
            </div>
          </div>
        </div>
        <div class="card-content pattern-text" style="padding-top: 0px;">
          <div class="row" >
            @if ($errors->has('email'))
              <div class="card-panel col s12 red">
                <span class="white-text">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
              </div>
            @endif
            @if ($errors->has('password'))
              <div class="card-panel col s12 red">
                <span class="white-text">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
              </div>
            @endif
            <div class="input-field col s12">
              <i class="material-icons prefix">account_circle</i>
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
              <label for="username">E-mail</label>
            </div>
            <div class="input-field col s12">
              <i class="material-icons prefix">vpn_key</i>
              <input id="password" type="password" class="form-control" name="password" required>
              <label for="password">Password</label>
            </div>
          </div>
          <p>
            <input type="checkbox" class="filled-in" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}/>
            <label for="remember">Remember Me</label>
          </p>
        </div>
        <div class="card-action">
          <div class="row">
            <div class="input-field col s12">
              <button type="submit" class="btn pattern-navbar full-width">ENTRAR <span class="fa fa-power-off"></span></button>
            </div>
            <div class="input-field col s12 center">
              <a class="red-text" href="{{ route('password.request') }}">
                  Forgot Your Password?
              </a>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
