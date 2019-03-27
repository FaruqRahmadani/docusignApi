<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">DocusignAPI</a>
          <ul class="nav navbar-nav navbar-left">
            @auth              
              <li><a href="{!! route('home') !!}">Home</a></li>
            @endauth
          </ul>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            @guest
              <li><a href="{!! route('login') !!}">Login</a></li>
            @else
              <li><a href="{!! route('logout') !!}">Logout</a></li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>
    <main class="py-4">
      <div class="container-fluid">
        @yield('content')
      </div>
    </main>
  </div>
</body>
<script src="{{ asset('js/app.js') }}" defer></script>
</html>
