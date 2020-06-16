<!-- This extends the layout to this page so that I don't have to place the header in each page individually -->
@extends('layouts.general')
<!-- This section changes the title from the page -->
<!-- Even though the <title> is in the <head> you can still use it like his -->
@section('title')
  Boosted Delivery | Product detail
@endsection

<!-- This is where the body starts and since there is a yield in the layout you can just create a section and start adding content -->
@section('content')
<div class="product-detail row">
  <div class="product-detail__list col-lg-3 offset-lg-1">
    <h1 class="product-detail__list__title">Andere producten</h1>
    <ul class="product-detail__list__wrapper">
      <li class="product-detail__list__item">Monster <span class="product-detail__list__item__arrow">--></span></li>
      <li class="product-detail__list__item">Shakura <span class="product-detail__list__item__arrow">--></span></li>
      <li class="product-detail__list__item">Bang <span class="product-detail__list__item__arrow">--></span></li>
      <li class="product-detail__list__item">Bullit <span class="product-detail__list__item__arrow">--></span></li>
    </ul>
  </div>
  <div class="product-detail__info col-lg-6">
    <div class="row">
      <img src="{{ asset('img/products/redbull.png') }}" alt="redbull" class="product-detail__info__image col-lg-6" />
      <div class="product-detail__info__content col-lg-6">
        <h1 class="product-detail__info__content__title">Red Bull</h1>
        <p class="product-detail__info__content__description">Red Bull Energy Drink wordt wereldwijd gewaardeerd door topatleten, studenten en prestatiegerichte professionals. En Red Bull houdt je scherp tijdens lange autoritten.</p>
        <p class="product-detail__info__content__ingredients">calorieën: 110, koolhydraten: 28g, sodium: 105mg, suiker: 27g</p>
      </div>
    </div>
  </div>
</div>
@endsection