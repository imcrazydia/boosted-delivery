<!-- This extends the layout to this page so that I don't have to place the header in each page individually -->
@extends('layouts.general')
<!-- This section changes the title from the page -->
<!-- Even though the <title> is in the <head> you can still use it like his -->
@section('title')
  Boosted Delivery | Afrekenen
@endsection

<!-- This is where the body starts and since there is a yield in the layout you can just create a section and start adding content -->
@section('content')
<div class="afrekenen">
    <div class="wrapper">
        <div class="container">
            <form action="">
                <h1>
                    <i class="fas fa-shipping-fast"></i>
                    Verzendgegevens
                </h1>
                <div class="name">
                    <div>
                        <label for="f-name">Voornaam</label>
                        <input type="text" name="f-name">
                    </div>
                    <div>
                        <label for="l-name">Achternaam</label>
                        <input type="text" name="l-name">
                    </div>
                </div>
                <div class="street">
                    <label for="name">Straat</label>
                    <input type="text" name="address">
                </div>
                <div class="address-info">
                    <div>
                        <label for="city">Stad</label>
                        <input type="text" name="city">
                    </div>
                    <div>
                        <label for="state">Staat</label>
                        <input type="text" name="state">
                    </div>
                    <div>
                        <label for="zip">Postcode</label>
                        <input type="text" name="zip">
                    </div>
                </div>
                <h1>
                    <i class="far fa-credit-card"></i> betalingsinformatie
                </h1>
                <div class="cc-num">
                    <label for="card-num">Credit Card No.</label>
                    <input type="text" name="card-num">
                </div>
                <div class="cc-info">
                    <div>
                        <label for="card-num">Exp</label>
                        <input type="text" name="expire">
                    </div>
                    <div>
                        <label for="card-num">CCV</label>
                        <input type="text" name="security">
                    </div>
                </div>
                {{-- <div class="btns">
                    <a href="{{ url('/profiel') }}">Betalen</a>
                    <a href="{{ url('/abonnementen/jouw-powercrate') }}">terug</a>
                </div> --}}
            </form>
        </div>
    </div>

    <a href="{{ url('/profiel') }}"><div class="button__next">Betalen</div></a>
    <a href="{{ url('/abonnementen/jouw-powercrate') }}"><div class="button__back">Terug</div></a>
</div>
@endsection