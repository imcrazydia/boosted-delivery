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
    <!-- Desktop Nav -->
    <div class="desktop-nav">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{URL::to('/')}}/img/logo/logo_zwart.png" class="website-logo" alt="card_icon" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('product.list') }}">{{ __('Producten') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('abonnementen') }}">{{ __('Abonnementen') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">{{ __('Over ons') }}</a>
                        </li>
                    </ul>
    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
    
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('profiel') }}">{{ __('Dashboard') }}</a>
                                <a class="dropdown-item" href="{{ route('product.add') }}">{{ __('Add') }}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Mobile Nav -->
    <div class="mobile-nav">
        <a class="mobile-nav--item" href="{{ route('home') }}"><i class='fas fa-home'></i></a>
        <a class="mobile-nav--item" href="{{ route('product.list') }}"><i class='fas fa-boxes'></i></a>
        <a class="mobile-nav--item" href="{{ route('abonnementen') }}"><i class='fas fa-shopping-cart'></i></a>
        <a class="mobile-nav--item" href="{{ route('about') }}"><i class='fas fa-info-circle'></i></a>
        <a class="mobile-nav--item" href="{{ route('profiel') }}"><i class='fas fa-user-circle'></i></a>
    </div>

    <!-- This is where all the pages content comes -->
    <main class="abonnementen">
        @yield('content')
    </main>
</body>

</html>
