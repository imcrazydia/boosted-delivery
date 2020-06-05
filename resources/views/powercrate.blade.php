<!-- This extends the layout to this page so that I don't have to place the header in each page individually -->
@extends('layouts.general')
<!-- This section changes the title from the page -->
<!-- Even though the <title> is in the <head> you can still use it like his -->
@section('title')
  Boosted Delivery | PowerCrate
@endsection

<!-- This is where the body starts and since there is a yield in the layout you can just create a section and start adding content -->
@section('content')
  <div class="powercrate">
    <h1 class="powercrate__title">Jouw PowerCrate <br>
      <span class="powercrate__subtitle">Wekelijks abonnement - Boosted</span>
    </h1>
      <div class="powercrate__products">
        <div class="row">
          <div class="powercrate__products__name col col-6">RedBull</div>
          <div class="powercrate__products__amount col col-6">4x</div>
        </div>
        <div class="row">
          <div class="powercrate__products__name col col-6">Shakura</div>
          <div class="powercrate__products__amount col col-6">2x</div>
        </div>
        <div class="row">
          <div class="powercrate__products__name col col-6">Bullit</div>
          <div class="powercrate__products__amount col col-6">4x</div>
        </div>
        <div class="row">
          <div class="powercrate__products__name col col-6">Slammers</div>
          <div class="powercrate__products__amount col col-6">4x</div>
        </div>
        <div class="powercrate__products__total_amount"></div>
        <div class="row">
          <div class="powercrate__products__name col col-5 col-md-6"><b><br><i>Totaal</i></b></div>
          <div class="powercrate__products__amount col col-7 col-md-6"><b><i>14x <br> Free (€13.99)</i></b></div>
        </div>
        <div class="row">
          <div class="powercrate__products__notice col-12 col-md-6"><b><br>* de eerste week is een proef week, zodat u onze service kunt testen.
          Mocht u dit abonnement aanhouden dan wordt er na de eerste week geld afgeschreven!</b></div>
        </div>
      </div>
      <a class="button" href="{{ url('/abonnementen/overzicht') }}">
        <div class="button__back">< Terug</div>
    </a>

    <a class="button" href="{{ url('/afrekenen') }}">
        <div class="button__next">Afrekenen ></div>
    </a>
  </div>
@endsection