<!-- This extends the layout to this page so that I don't have to place the header in each page individually -->
@extends('layouts.general')
<!-- This section changes the title from the page -->
<!-- Even though the <title> is in the <head> you can still use it like his -->
@section('title')
  Boosted Delivery
@endsection

<!-- This is where the body starts and since there is a yield in the layout you can just create a section and start adding content -->
@section('content')
  <div class="home">
    <!-- Header -->
    <section class="home__section__header">
      <!-- Hero -->
      <img class="home__section__header__hero" src="{{URL::to('/')}}/img/headers/header.jpg" alt="Header background" />

      <div class="home__section__header__wrapper row">
        <div class="col col-12 col-md-6">
          <!-- Header title -->
          <h1 class="home__section__header__title">Boosted <span class="home__section__header__title--second">Delivery</span></h1>
          <!-- Mobile header image -->
          <img class="home__section__header__image--mobile" src="{{URL::to('/')}}/img/kermit.jpg" alt="Header background" />
          <div class="home__section__header__content">
            <!-- Intro text -->
            <div class="home__section__header__content__intro-text col col-12">
              <p>De bezorgings service dat jou elke maand of week laat genieten van thuisbezorgde energie drank!</p>
            </div>
            <!-- Intro selling points -->
            <div class="home__section__header__content__intro-points col col-12">
              <ul>
                <li>Kies van 8 verschillende merken</li>
                <li>Keuze uit 6 abonnementen</li>
                <li>Thuisbezorgd</li>
              </ul>
            </div>
            <!-- Header button -->
            <div class="home__section__header__content__button-wrapper col col-12 col-md-8">
              <a href="">Abonneer</a>
            </div>
          </div>
        </div>
        <!-- Desktop header image -->
        <div class="col col-12 col-md-6">
          <img class="home__section__header__image--desktop" src="{{URL::to('/')}}/img/kermit.jpg" alt="Header background" />
        </div>
      </div>
    </section>
    <!-- PowerCrates -->
    <section class="home__section__powercrate">
      <div class="home__section__powercrate__wrapper row">
        <div class="col col-12">
          <h1 class="home__section__powercrate__title">Onze service</h1>
          <div class="home__section__powercrate__explanation row">
            <div class="home__section__powercrate__explanation__card col col-12 col-md-4">
              <img class="home__section__powercrate__explanation__card__icon" src="{{URL::to('/')}}/img/icons/truck.png" alt="Truck icon" />
              <div class="home__section__powercrate__explanation__card__text">
                Wij bezorgen de PowerCrates zelf met een truck.
              </div>
            </div>
            <div class="home__section__powercrate__explanation__card col col-12 col-md-4">
              <img class="home__section__powercrate__explanation__card__icon" src="{{URL::to('/')}}/img/icons/cooler.png" alt="Cooler icon" />
              <div class="home__section__powercrate__explanation__card__text">
                Wij hebben een speciale koelbox waar de energie drankjes in worden bewaard,
                zodat ze koel blijven. Ook is er droog ijs aanwezig in de koelbox dus wanneer je hem opent zal er een mist uitrollen voor extra effect.
              </div>
            </div>
            <div class="home__section__powercrate__explanation__card col col-12 col-md-4">
              <img class="home__section__powercrate__explanation__card__icon" src="{{URL::to('/')}}/img/icons/drink.png" alt="Drink icon" />
              <div class="home__section__powercrate__explanation__card__text">
                Wij hebben verschillende de keuzes aan energie drank waar u zelf uit kan kiezen na het selecteren van een abonnement.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Subscriptions -->
    <section class="home__section__subscribe">

    </section>
    <!-- Mail -->
    <section class="home__section__mail">

    </section>
  </div>
@endsection