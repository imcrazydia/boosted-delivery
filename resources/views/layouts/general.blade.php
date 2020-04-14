<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no ,initial-scale=1, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
      @section('title')
        Boosted Delivery
      @show
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo asset('/css/app.css')?>">
  </head>
  <body>
    <!-- The navigation of the page -->
    <nav>
      Boosted Delivery
    </nav>
    <!-- This is where all the pages content comes -->
    <main class="abonnementen">
      @yield('content')
    </main>
  </body>
</html>
