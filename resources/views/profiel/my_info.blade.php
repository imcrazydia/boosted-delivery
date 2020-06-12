<!-- This extends the layout to this page so that I don't have to place the header in each page individually -->
@extends('layouts.general')
<!-- This section changes the title from the page -->
<!-- Even though the <title> is in the <head> you can still use it like his -->
@section('title')
Boosted Delivery | Mijn gegevens
@endsection

<!-- This is where the body starts and since there is a yield in the layout you can just create a section and start adding content -->
@section('content')
<div class="my_info">
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
                        <p>Joey</p>
                    </div>
                    <div>
                        <label for="l-name">Achternaam</label>
                        <p>Bakker</p>
                    </div>
                </div>
                <div class="street">
                    <label for="address">Straat</label>
                    <p>Contactweg 36</p>
                </div>
                <div class="address-info">
                    <div>
                        <label for="city">Stad</label>
                        <p>Amsterdam</p>
                    </div>
                    <div>
                        <label for="state">Staat</label>
                        <p>Nederland</p>
                    </div>
                    <div>
                        <label for="zip">Postcode</label>
                        <p>1014 AN</p>
                    </div>
                </div>
            </form>

            <a href="{{ url('/profiel') }}" class="besteld__button"><div class="besteld__button__context">Terug naar jouw profiel</div></a>
        </div>
    </div>
</div>
@endsection
