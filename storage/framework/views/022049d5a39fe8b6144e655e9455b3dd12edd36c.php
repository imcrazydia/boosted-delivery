<!-- This extends the layout to this page so that I don't have to place the header in each page individually -->

<!-- This section changes the title from the page -->
<!-- Even though the <title> is in the <head> you can still use it like his -->
<?php $__env->startSection('title'); ?>
  Boosted Delivery
<?php $__env->stopSection(); ?>

<!-- This is where the body starts and since there is a yield in the layout you can just create a section and start adding content -->
<?php $__env->startSection('content'); ?>
  <div class="home">
    <!-- Header -->
    <section class="home__section__header">
      <!-- Hero -->
      <img class="home__section__header__hero" src="<?php echo e(URL::to('/')); ?>/img/headers/header.jpg" alt="Header background" />

      <div class="home__section__header__wrapper row">
        <div class="col col-12 col-lg-6">
          <!-- Header title -->
          <h1 class="home__section__header__title">Boosted <span class="home__section__header__title--second">Delivery</span></h1>
          <!-- Mobile header image -->
          <img class="home__section__header__image--mobile" src="<?php echo e(URL::to('/')); ?>/img/kermit.jpg" alt="Header background" />
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
          <img class="home__section__header__image--desktop" src="<?php echo e(URL::to('/')); ?>/img/kermit.jpg" alt="Header background" />
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
              <img class="home__section__service__explanation__card__icon" src="<?php echo e(URL::to('/')); ?>/img/icons/truck.png" alt="Truck icon" />
              <div class="home__section__service__explanation__card__text">
                Wij bezorgen de PowerCrates zelf met een truck.
              </div>
            </div>
            <div class="home__section__service__explanation__card col col-12 col-md-4">
              <img class="home__section__service__explanation__card__icon" src="<?php echo e(URL::to('/')); ?>/img/icons/cooler.png" alt="Cooler icon" />
              <div class="home__section__service__explanation__card__text">
                Wij hebben een speciale koelbox waar de energie drankjes in worden bewaard,
                zodat ze koel blijven. Ook is er droog ijs aanwezig in de koelbox dus wanneer je hem opent zal er een mist uitrollen voor extra effect.
              </div>
            </div>
            <div class="home__section__service__explanation__card col col-12 col-md-4">
              <img class="home__section__service__explanation__card__icon" src="<?php echo e(URL::to('/')); ?>/img/icons/drink.png" alt="Drink icon" />
              <div class="home__section__service__explanation__card__text">
                Wij hebben verschillende de keuzes aan energie drank waar u zelf uit kan kiezen na het selecteren van een abonnement.
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
                <img class="home__section__subscription__container__overview__card__icon" src="<?php echo e(URL::to('/')); ?>/img/icons/basic_icon.png" alt="subscription icon">
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
                <img class="home__section__subscription__container__overview__card__icon" src="<?php echo e(URL::to('/')); ?>/img/icons/boosted_icon.png" alt="subscription icon">
                <div class="home__section__subscription__container__overview__card__title recommended__title weekly_second_card_title">
                  <span class="home__section__subscription__container__overview__card__title__text">Boosted</span> <br>
                  <span class="home__section__subscription__container__overview__card__title__recommended">Aanbevolen</span>
                </div>
                <div class="home__section__subscription__container__overview__card__price recommended__price"><span class="front-price">€13.99</span>/ we</div>
                <div class="home__section__subscription__container__overview__card__benefits recommended__benefits">
                  <ul>
                    <li>Keuze uit 14 drankjes</li>
                  </ul>
                  <div class="home__section__subscription__container__overview__card__button-wrapper col col-12 col-md-8">
                    <a href="<?php echo e(route('abonnementen.overzicht')); ?>">Abonneer</a>
                  </div>
                </div>
              </div>
              <div class="home__section__subscription__container__overview__card col col-12 col-md-4">
                <img class="home__section__subscription__container__overview__card__icon" src="<?php echo e(URL::to('/')); ?>/img/icons/extreme_icon.png" alt="subscription icon">
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
                <img class="home__section__subscription__container__overview__card__icon" src="<?php echo e(URL::to('/')); ?>/img/icons/basic_icon.png" alt="subscription icon">
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
                <img class="home__section__subscription__container__overview__card__icon" src="<?php echo e(URL::to('/')); ?>/img/icons/boosted_icon.png" alt="subscription icon">
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
                <img class="home__section__subscription__container__overview__card__icon" src="<?php echo e(URL::to('/')); ?>/img/icons/extreme_icon.png" alt="subscription icon">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ma\bewijzenmap\periode2.3\k_id\boosted-delivery\resources\views/home.blade.php ENDPATH**/ ?>