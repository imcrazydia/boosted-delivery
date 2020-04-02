<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no ,initial-scale=1, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boosted Delivery</title>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo asset('/css/app.css')?>">
  </head>
  <body>
    <header>
      <h2>
        @section('header')
          Boosted Delivery
        @show
      </h2>
    </header>

    <nav>
      @section('nav')
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/producten') }}">Producten</a>
        <a href="{{ url('/abonnementen') }}">Abonnementen</a>
      @show
    </nav>

    <main>
      @yield('content')
    </main>

    <footer>
      @section('footer')
        Boosted Footer
      @show
    </footer>
  </body>
</html>
