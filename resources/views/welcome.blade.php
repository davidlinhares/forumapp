<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <!--BEGIN HEADER-->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name') }}</title>

      <!-- Styles -->
      <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/materialize.css') }}"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/custom.css') }}"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/font-awesome.css') }}"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/material-icons.css') }}"  media="screen,projection"/>
      <!--END HEADER-->
    </head>
    <body class="pattern-body">
      <!--
      <div id="welcome" class="card horizontal" style="margin: 0;">
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
      -->
      <div id="welcome" class="row" style="margin: 0;">
        <div id="welcome-left" class="col s12 m6 hide-on-small-and-down">

        </div>
        <div id="welcome-right" class="col s12 m6 pattern-body">
          <h3 class="center">forumapp</h3>
          <p class="flow-text">Welcome to forumapp.</p>
          <p class="flow-text">A place for you to share posts based on community topics.</p>
          <p class="flow-text"><a href="{{ route('login') }}">Login</a> or <a href="{{ route('register') }}">Register</a> and join a milion of thinkers and share your thoughts.</p>
          <p class="center">
            <a href="{{ route('login') }}" class="waves-effect waves-light btn-large blue">Login</a>
            <a href="{{ route('register') }}" class="waves-effect waves-light btn-large green">Register</a>
          </p>
        </div>
      </div>
      <!--BEGIN FOOTER-->
      <!--Scripts-->
      <script src="{{ URL::asset('js/app.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('js/materialize.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
      <!--END FOOTER-->
    </body>
  </html>
