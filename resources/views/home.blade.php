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
        <div class="col col-12 col-lg-6">
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
            <a href="#subscription">
              <div class="home__section__header__content__button-wrapper col col-12 col-md-8">
                Abonneer
              </div>
            </a>
          </div>
        </div>
        <!-- Desktop header image -->
        <div class="col col-12 col-md-6">
          <img class="home__section__header__image--desktop" src="{{URL::to('/')}}/img/kermit.jpg" alt="Header background" />
        </div>
      </div>
    </section>
    <!-- Our service -->
    <section class="home__section__service">
      <div class="home__section__service__wrapper row">
        <div class="col col-12">
          <h1 class="home__section__service__title">Onze service</h1>
          <div class="home__section__service__explanation row">
            <div class="home__section__service__explanation__card col col-12 col-md-4">
              <img class="home__section__service__explanation__card__icon" src="{{URL::to('/')}}/img/icons/truck.png" alt="Truck icon" />
              <div class="home__section__service__explanation__card__text col-md-11 offset-md-1">
                Wij bezorgen de eerste dag van elke week/maand jouw gepersonaliseerde PowerCrate aan uw voordeur,
                zodat u hier meteen vanuit huis van kan genieten en de boost krijgt om uw dag te beginnen!
              </div>
            </div>
            <div class="home__section__service__explanation__card col col-12 col-md-4">
              <img class="home__section__service__explanation__card__icon" src="{{URL::to('/')}}/img/icons/cooler.png" alt="Cooler icon" />
              <div class="home__section__service__explanation__card__text col-md-11 offset-md-1">
                Wij hebben een speciale koelbox waar de energie drankjes in worden bewaard,
                zodat ze koel blijven. Ook is er droog ijs aanwezig in de koelbox dus wanneer uw hem opent zal er een mist uitrollen voor extra effect.
              </div>
            </div>
            <div class="home__section__service__explanation__card col col-12 col-md-4">
              <img class="home__section__service__explanation__card__icon" src="{{URL::to('/')}}/img/icons/drink.png" alt="Drink icon" />
              <div class="home__section__service__explanation__card__text col-md-11 offset-md-1">
                Wij hebben een keuze menu van 8 verschillende energie drank merken waar u uit kan kiezen,
                nadat u een abonnement hebt geselecteerd. Ook kunt u op de producten lijst onze keuzes bekijken.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Subscriptions -->
    <section class="home__section__subscription" id="subscription">
      <div class="home__section__subscription__wrapper row">
        <div class="col col-12">
          <h1 class="home__section__subscription__title">Kies het abonnement dat bij jou past</h1>
          <div class="home__section__subscription__container">
            <div class="home__section__subscription__container__selection tab col col-12">
              <a class="home__section__subscription__container__selection__link tablinks" onclick="openSubscription(event, 'weekly')" id="defaultOpen">Weekelijks</a>
              <a class="home__section__subscription__container__selection__link tablinks" onclick="openSubscription(event, 'monthly')">Maandelijks</a>
            </div>
            
            <div id="weekly" class="home__section__subscription__container__overview tabcontent row">
              <div class="home__section__subscription__container__overview__card col col-12 col-md-4">
                <img class="home__section__subscription__container__overview__card__icon" src="{{URL::to('/')}}/img/icons/basic_icon.png" alt="subscription icon">
                <div class="home__section__subscription__container__overview__card__title">Basic</div>
                <div class="home__section__subscription__container__overview__card__price"><span class="front-price">€4.49</span>/ we</div>
                <div class="home__section__subscription__container__overview__card__benefits">
                  <ul>
                    <li>Keuze uit 7 drankjes</li>
                  </ul>
                  <div class="home__section__subscription__container__overview__card__button-wrapper col col-12 col-md-8">
                    <a href="#subscription">Abonneer</a>
                  </div>
                </div>
              </div>
              <div class="home__section__subscription__container__overview__card recommended col col-12 col-md-4">
                <img class="home__section__subscription__container__overview__card__icon" src="{{URL::to('/')}}/img/icons/boosted_icon.png" alt="subscription icon">
                <div class="home__section__subscription__container__overview__card__title recommended__title weekly_second_card_title">
                  <span class="home__section__subscription__container__overview__card__title__text">Boosted</span> <br>
                  <span class="home__section__subscription__container__overview__card__title__recommended">Aanbevolen</span>
                </div>
                <div class="home__section__subscription__container__overview__card__price recommended__price"><span class="front-price">€13.99</span>/ we</div>
                <div class="home__section__subscription__container__overview__card__benefits recommended__benefits">
                  <ul>
                    <li>Keuze uit 14 drankjes</li>
                  </ul>
                  <a href="{{ route('abonnementen.overzicht') }}">
                    <div class="home__section__subscription__container__overview__card__button-wrapper col col-12 col-md-8">
                      Abonneer
                    </div>
                  </a>
                </div>
              </div>
              <div class="home__section__subscription__container__overview__card col col-12 col-md-4">
                <img class="home__section__subscription__container__overview__card__icon" src="{{URL::to('/')}}/img/icons/extreme_icon.png" alt="subscription icon">
                <div class="home__section__subscription__container__overview__card__title">Extreme</div>
                <div class="home__section__subscription__container__overview__card__price"><span class="front-price">€17.99</span>/ we</div>
                <div class="home__section__subscription__container__overview__card__benefits">
                  <ul>
                    <li>Keuze uit 21 drankjes</li>
                  </ul>
                  <div class="home__section__subscription__container__overview__card__button-wrapper col col-12 col-md-8">
                    <a href="#subscription">Abonneer</a>
                  </div>
                </div>
              </div>
            </div>
            
            <div id="monthly" class="home__section__subscription__container__overview tabcontent row">
              <div class="home__section__subscription__container__overview__card col col-12 col-md-4">
                <img class="home__section__subscription__container__overview__card__icon" src="{{URL::to('/')}}/img/icons/basic_icon.png" alt="subscription icon">
                <div class="home__section__subscription__container__overview__card__title">Basic</div>
                <div class="home__section__subscription__container__overview__card__price"><span class="front-price">€8.49</span>/ ma</div>
                <div class="home__section__subscription__container__overview__card__benefits">
                  <ul>
                    <li>Keuze uit 15 drankjes</li>
                  </ul>
                  <div class="home__section__subscription__container__overview__card__button-wrapper col col-12 col-md-8">
                    <a href="#subscription">Abonneer</a>
                  </div>
                </div>
              </div>
              <div class="home__section__subscription__container__overview__card col col-12 col-md-4">
                <img class="home__section__subscription__container__overview__card__icon" src="{{URL::to('/')}}/img/icons/boosted_icon.png" alt="subscription icon">
                <div class="home__section__subscription__container__overview__card__title">Boosted</div>
                <div class="home__section__subscription__container__overview__card__price"><span class="front-price">€19.99</span>/ ma</div>
                <div class="home__section__subscription__container__overview__card__benefits">
                  <ul>
                    <li>Keuze uit 30 drankjes</li>
                  </ul>
                  <div class="home__section__subscription__container__overview__card__button-wrapper col col-12 col-md-8">
                    <a href="#subscription">Abonneer</a>
                  </div>
                </div>
              </div>
              <div class="home__section__subscription__container__overview__card col col-12 col-md-4">
                <img class="home__section__subscription__container__overview__card__icon" src="{{URL::to('/')}}/img/icons/extreme_icon.png" alt="subscription icon">
                <div class="home__section__subscription__container__overview__card__title">Extreme</div>
                <div class="home__section__subscription__container__overview__card__price"><span class="front-price">€24.99</span>/ ma</div>
                <div class="home__section__subscription__container__overview__card__benefits">
                  <ul>
                    <li>Keuze uit 60 drankjes</li>
                  </ul>
                  <div class="home__section__subscription__container__overview__card__button-wrapper col col-12 col-md-8">
                    <a href="#subscription">Abonneer</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Mail -->
    <section class="home__section__mail">

    </section>
  </div>
@endsection