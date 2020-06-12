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
                        <input type="text" name="f-name" value="Joey">
                    </div>
                    <div>
                        <label for="l-name">Achternaam</label>
                        <input type="text" name="l-name" value="Bakker">
                    </div>
                </div>
                <div class="street">
                    <label for="address">Straat</label>
                    <input type="text" name="address" value="Contactweg 36">
                </div>
                <div class="address-info">
                    <div>
                        <label for="city">Stad</label>
                        <input type="text" name="city" value="Amsterdam">
                    </div>
                    <div>
                        <label for="state">Staat</label>
                        <input type="text" name="state" value="Nederland">
                    </div>
                    <div>
                        <label for="zip">Postcode</label>
                        <input type="text" name="zip" value="1014 AN">
                    </div>
                </div>
                <h1>
                    <i class="far fa-credit-card"></i> betalingsinformatie
                </h1>
                <div class="cc-num">
                    <label for="card-num">Bank</label>
                    <select name="bank_choice" class="select-menu__banks">
                        <option value="start_option">Kies uw bank</option>
                        <option value="abn">ABN Amro</option>
                        <option value="asn">ASN Bank</option>
                        <option value="bunq">bunq</option>
                        <option value="ing">ING</option>
                        <option value="knab">knab</option>
                        <option value="rabobank">Rabobank</option>
                        <option value="regiobank">Regiobank</option>
                        <option value="sns">SNS Bank</option>
                        <option value="triodos">Triodos Bank</option>
                        <option value="van_lanschot">Van Lanschot Bankiers</option>
                    </select>
                </div>
            </form>
        </div>
    </div>

    <a href="{{ url('/afrekenen/besteld') }}"><div class="button__next">Betalen ></div></a>
    <a href="{{ url('/abonnementen/jouw-powercrate') }}"><div class="button__back">< Terug</div></a>
</div>
@endsection