<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no ,initial-scale=1, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @section('title')
        Boosted Delivery
        @show
    </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo asset('/css/app.css')?>">
  </head>

  <body>
    <div class="menu">
        <nav class="menu__nav">
            <ul class="r-list menu__list">
                <li class="menu__group">
                    <img class="nav_logo" src="{{URL::to('/')}}/img/logo/logo_wit.png" alt="navigation logo">
                </li>
                <li class="menu__group">
                    <a class="r-link menu__link" href="{{ url('/') }}">{{ __('Home') }}</a>
                </li>
                <li class="menu__group">
                    <a class="r-link menu__link" href="{{ route('product.list') }}">{{ __('Producten') }}</a>
                </li>
                <li class="menu__group">
                    <a class="r-link menu__link" href="{{ route('about') }}">{{ __('Over ons') }}</a>
                </li>
                @guest
                <li class="menu__group">
                    <a class="r-link menu__link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="menu__group">
                    <a class="r-link menu__link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="menu__group">
                    <a class="r-link menu__link" href="{{ route('profiel') }}">{{ __('Dashboard') }}</a>    
                </li>
                @endguest
            </ul>
        </nav>
        <div class="menu__toggle">
            <button class="r-button menu__hamburger">
                <span class="m-hamburger">
                    <span class="m-hamburger__label">Open menu</span>
                </span>
            </button>
        </div>
    </div>

    <!-- This is where all the pages content comes -->
    <main class="abonnementen" style="width: 100%">
        @yield('content')
    </main>

    <!-- More scripts -->
    <script src="{{ asset('js/menu.js') }}" defer></script>
    <script src="{{ asset('js/tabs.js') }}" defer></script>
  </body>
</html>
