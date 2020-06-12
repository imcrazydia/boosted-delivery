<!-- This extends the layout to this page so that I don't have to place the header in each page individually -->
@extends('layouts.general')
<!-- This section changes the title from the page -->
<!-- Even though the <title> is in the <head> you can still use it like his -->
@section('title')
  Boosted Delivery | Profiel
@endsection

<!-- This is where the body starts and since there is a yield in the layout you can just create a section and start adding content -->
@section('content')
<div class="dashboard">
    <div class="dash row">
        <div class="dash-menu">
            <a class="r-link menu__link" href="{{ route('profiel.info') }}"><h3 class="dash-menu-text">Mijn gegevens</h3></a>
            <a class="r-link menu__link" href="{{ route('abonnementen.overzicht') }}"><h3 class="dash-menu-text">Abonnement aanpassen</h3></a>
            <a class="r-link menu__link" href="{{ route('product.add') }}"><h3 class="dash-menu-text">Product toevoegen</h3></a>
            <a class="r-link menu__link" href="{{ route('password.request') }}"><h3 class="dash-menu-text">Wachtwoord resetten</h3></a>
            <a class="r-link menu__link" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      <h3 class="dash-menu-text">Uitloggen</h3>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
            
        </div>
        <div class="vertical-line"></div>
        <div class="vertical-line-mobile"></div>
        <div class="dash-info">
            <h1>Welkom, {{ Auth::user()->name }}</h1>
            <hr class="hr2">
            <h3><span>-</span> Abonnement: Boosted PowerCrate (<span>€4.49</span>)</h3>
            <h3><span>-</span> Dit is een wekelijks abonnement </h3>
            <h3><span>-</span> U heeft de volgende energie drankjes gekozen in uw Crate:</h3>

            <h3 class="drinks"><span>></span> x1 Redbull</h3>
            <h3 class="drinks"><span>></span> x2 Monster</h3>
            <h3 class="drinks"><span>></span> x3 Slammers</h3>
            <h3 class="drinks"><span>></span> x1 Bling</h3>
        </div>
    </div>
</div>
@endsection

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
                
            
        </div>
    </div>
</div> --}}
{{-- <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
</div>
@endif

You are logged in!
</div> --}}
