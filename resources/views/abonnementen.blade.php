<!-- This extends the layout to this page so that I don't have to place the header in each page individually -->
@extends('layouts.general')
<!-- This section changes the title from the page -->
<!-- Even though the <title> is in the <head> you can still use it like his -->
@section('title')
  Boosted Delivery | Abonnementen
@endsection

<!-- This is where the body starts and since there is a yield in the layout you can just create a section and start adding content -->
@section('content')
  <!-- Variables -->
  @php($pc = "PowerCrate")

  <h2 class="abonnementen__title">Weekelijkse Abonnementen</h2>
<form action="{{ route('abonnementen.choice') }}" method="POST">
  @csrf
    <div class="abonnementen__cards">
      <!-- Basic -->
      <div class="abonnementen__cards__content">
      <h3 class="abonnementen__cards__content__title">Basic {{ $pc }}</h3>
        <p class="abonnementen__cards__content__amount">Keuze uit 7 drankjes</p>
        <p class="abonnementen__cards__content__description">Ben jij iemand die niet te veel energie drinkt, maar er toch van houd om een paar keer in de week een blikje te proberen dan is de <i>Basic Powercrate</i> iets voor jou!</p>
        <div class="abonnementen__cards__content__price">€9,99</div>
        <button type="submit" name="keuze" value="basic" class="abonnementen__cards__content__purchase">Bestel</button> <br />
      <img src="{{URL::to('/')}}/img/icons/basic.png" class="abonnementen__cards__content__icon icon-basic" alt="card_icon" />
      </div>
      <!-- Boosted -->
      <div class="abonnementen__cards__content">
        <img src="{{URL::to('/')}}/img/recommended.png" class="abonnementen__cards__content__recommended" alt="recommended-abonnement">
        <h3 class="abonnementen__cards__content__title">Boosted {{ $pc }}</h3>
        <p class="abonnementen__cards__content__amount">Keuze uit 14 drankjes</p>
        <p class="abonnementen__cards__content__description">Heb jij een extra boost nodig in de week? En hou je er ook nog is van om tussen door wat te drinken, dan is de <i>Boosted Powercrate</i> jou perfecte keuze.</p>
        <div class="abonnementen__cards__content__price">€19,99</div>
        <button type="submit" name="keuze" value="boosted" class="abonnementen__cards__content__purchase">Bestel</button> <br />
        <img src="{{URL::to('/')}}/img/icons/boosted.png" class="abonnementen__cards__content__icon icon-boosted" alt="card_icon" />
      </div>
      <!-- Extreme -->
      <div class="abonnementen__cards__content">
        <h3 class="abonnementen__cards__content__title">Extreme {{ $pc }}</h3>
        <p class="abonnementen__cards__content__amount">Keuze uit 21 drankjes</p>
        <p class="abonnementen__cards__content__description">Gebruik jij te veel energie in een week en heb jij een bom aan energie nodig? Dan is de <i>Extreme PowerCrate</i> iets voor jou. Naast de heerlijke smaken waaruit je kan kiezen, krijg je genoeg energie on jou week door te brengen.</p>
        <div class="abonnementen__cards__content__price extreme_price">€29,99</div>
        <button type="submit" name="keuze" value="extreme" class="abonnementen__cards__content__purchase">Bestel</button> <br />
        <img src="{{URL::to('/')}}/img/icons/extreme.png" class="abonnementen__cards__content__icon icon-extreme" alt="card_icon" />
      </div>
    </div>
  </form>
@endsection