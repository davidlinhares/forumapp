@extends('layouts.app')

@section('content')
<div class="card hoverable">
  <div class="card-header-logo pattern-navbar center">
    <div class="row no-margin">
      <div class="col s12 m12">
        <h3 class="pattern-navbar-text">Register</h3>
      </div>
    </div>
  </div>
  <div class="card-content" style="padding-top: 0px;">
    <div class="row">
      <div class="col s12">
        @if ($errors->has('name'))
          <div class="card-panel red">
            <span class="white-text">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
          </div>
        @endif
        @if ($errors->has('username'))
          <div class="card-panel red">
            <span class="white-text">
              <strong>{{ $errors->first('username') }}</strong>
            </span>
          </div>
        @endif
        @if ($errors->has('email'))
          <div class="card-panel red">
            <span class="white-text">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          </div>
        @endif
        @if ($errors->has('password'))
          <div class="card-panel red">
            <span class="white-text">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
          </div>
        @endif
        @if ($errors->has('terms'))
          <div class="card-panel red">
            <span class="white-text">
              <strong>{{ $errors->first('terms') }}</strong>
            </span>
          </div>
        @endif
      </div>
    </div>
    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
      {{ csrf_field() }}
      <div class="row">
        <div class="input-field col s12">
          <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
          <label for="name">Name</label>
        </div>
        <div class="input-field col s12">
          <input id="username" type="text" name="username" value="{{ old('username') }}" required>
          <label for="username">Username</label>
        </div>
        <div class="input-field col s12">
          <input id="email" type="email" name="email" value="{{ old('email') }}" required>
          <label for="email">E-Mail Address</label>
        </div>
        <div class="input-field col s12">
          <input id="password" type="password" class="form-control" name="password" required>
          <label for="password">Password</label>
        </div>
        <div class="input-field col s12">
          <input id="password-confirm" type="password" name="password_confirmation" required>
          <label for="password-confirm">Confirm Password</label>
        </div>
        <div class="col s12">
          <p>
            <input type="checkbox" id="terms" name="terms"/>
            <label for="terms">Afirmo que li, concordo e aceito os Termos de Serviços estabelecidos para esta plataforma.</label>
          </p>
        </div>
        <div class="input-field col s12">
          <button type="submit" class="btn btn-primary">Register</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
