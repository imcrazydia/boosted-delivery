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
  @php($pc = "powercrate")

  <h2 class="abonnementen__title">Weekelijkse Abonnementen</h2>
  <div class="abonnementen__cards">
    <!-- Basic -->
    <div class="abonnementen__cards__content">
    <h3 class="abonnementen__cards__content__title">Basic {{ $pc }}</h3>
      <p class="abonnementen__cards__content__amount">7</p>
      <p class="abonnementen__cards__content__description">hier komt description</p>
      <div class="abonnementen__cards__content__price">10 euro</div>
      <a href="" class="abonnementen__cards__content__purchase">Bestel</a> <br />
      <img src="" class="abonnementen__cards__content__icon" alt="card_icon" />
    </div>
    <!-- Boosted -->
    <div class="abonnementen__cards__content">
      <h3 class="abonnementen__cards__content__title">Boosted {{ $pc }}</h3>
      <p class="abonnementen__cards__content__amount">14</p>
      <p class="abonnementen__cards__content__description">hier komt description</p>
      <div class="abonnementen__cards__content__price">20 euro</div>
      <a href="" class="abonnementen__cards__content__purchase">Bestel</a> <br />
      <img src="" class="abonnementen__cards__content__icon" alt="card_icon" />
    </div>
    <!-- Extreme -->
    <div class="abonnementen__cards__content">
      <h3 class="abonnementen__cards__content__title">Extreme {{ $pc }}</h3>
      <p class="abonnementen__cards__content__amount">21</p>
      <p class="abonnementen__cards__content__description">hier komt description</p>
      <div class="abonnementen__cards__content__price">30 euro</div>
      <a href="" class="abonnementen__cards__content__purchase">Bestel</a> <br />
      <img src="" class="abonnementen__cards__content__icon" alt="card_icon" />
    </div>
  </div>
@endsection