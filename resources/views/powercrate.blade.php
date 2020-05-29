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
    <h1 class="powercrate__title">Jouw PowerCrate</h1>
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
        <br>
        <div class="row">
          <div class="powercrate__products__name col col-6">Totaal</div>
          <div class="powercrate__products__amount col col-6">14x</div>
        </div>
      </div>
      <a class="button" href="{{ url('/abonnementen/overzicht') }}">
        <div class="button__back">Terug</div>
    </a>

    <a class="button" href="{{ url('/abonnementen/afrekenen') }}">
        <div class="button__next">Afrekenen</div>
    </a>
  </div>
@endsection