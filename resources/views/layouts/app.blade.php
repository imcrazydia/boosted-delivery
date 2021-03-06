<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Onze services bezorgd energie drank bij jou aan de voordeur! ">

    <!-- FavIcon -->
    <link rel="icon" type="image/png" href="{{URL::to('/')}}/img/icons/favicon.png"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

  <body>
    <div id="app">
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- More scripts -->
    <script src="{{ asset('js/menu.js') }}" defer></script>
    <script src="{{ asset('js/tabs.js') }}" defer></script>
  </body>
</html>
