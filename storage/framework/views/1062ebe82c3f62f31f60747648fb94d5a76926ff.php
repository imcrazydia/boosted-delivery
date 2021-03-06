<!-- This extends the layout to this page so that I don't have to place the header in each page individually -->

<!-- This section changes the title from the page -->
<!-- Even though the <title> is in the <head> you can still use it like his -->
<?php $__env->startSection('title'); ?>
Boosted Delivery | Abonnementen
<?php $__env->stopSection(); ?>

<!-- This is where the body starts and since there is a yield in the layout you can just create a section and start adding content -->
<?php $__env->startSection('content'); ?>
<!-- Variables -->
<?php ($pc = "PowerCrate"); ?>

<!-- Maandelijkse Abonnementen -->
<h1 class="abonnementen__title">Weekelijkse Abonnementen</h1>
<form action="<?php echo e(route('abonnementen.choice')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="abonnementen__cards">
        <!-- W Basic -->
        <div class="abonnementen__cards__content">
            <h3 class="abonnementen__cards__content__title">Basic <?php echo e($pc); ?></h3>
            <p class="abonnementen__cards__content__amount">Keuze uit 7 drankjes</p>
            <p class="abonnementen__cards__content__description">Ben jij iemand die niet te veel energie drinkt, maar er
                toch van houd om een paar keer in de week een blikje te proberen dan is de <i>Basic Powercrate</i> iets
                voor jou!</p>
            <div class="abonnementen__cards__content__price">€9,99</div>
            <button type="submit" name="keuze" value="Weekelijkse - Basic"
                class="abonnementen__cards__content__purchase">Bestel</button> <br />
            <img src="<?php echo e(URL::to('/')); ?>/img/icons/basic.png" class="abonnementen__cards__content__icon icon-basic"
                alt="card_icon" />
        </div>
        <!-- W Boosted -->
        <div class="abonnementen__cards__content">
            <img src="<?php echo e(URL::to('/')); ?>/img/recommended.png" class="abonnementen__cards__content__recommended"
                alt="recommended-abonnement">
            <h3 class="abonnementen__cards__content__title">Boosted <?php echo e($pc); ?></h3>
            <p class="abonnementen__cards__content__amount">Keuze uit 14 drankjes</p>
            <p class="abonnementen__cards__content__description">Heb jij een extra boost nodig in de week? En hou je er
                ook nog is van om tussen door wat te drinken, dan is de <i>Boosted Powercrate</i> jou perfecte keuze.
            </p>
            <div class="abonnementen__cards__content__price">€19,99</div>
            <button type="submit" name="keuze" value="Weekelijkse - Boosted"
                class="abonnementen__cards__content__purchase">Bestel</button> <br />
            <img src="<?php echo e(URL::to('/')); ?>/img/icons/boosted.png" class="abonnementen__cards__content__icon icon-boosted"
                alt="card_icon" />
        </div>
        <!-- W Extreme -->
        <div class="abonnementen__cards__content">
            <h3 class="abonnementen__cards__content__title">Extreme <?php echo e($pc); ?></h3>
            <p class="abonnementen__cards__content__amount">Keuze uit 21 drankjes</p>
            <p class="abonnementen__cards__content__description">Gebruik jij te veel energie in een week en heb jij een
                bom aan energie nodig? Dan is de <i>Extreme PowerCrate</i> iets voor jou. Naast de heerlijke smaken
                waaruit je kan kiezen, krijg je genoeg energie on jou week door te brengen.</p>
            <div class="abonnementen__cards__content__price extreme_price">€29,99</div>
            <button type="submit" name="keuze" value="Weekelijkse - Extreme"
                class="abonnementen__cards__content__purchase">Bestel</button> <br />
            <img src="<?php echo e(URL::to('/')); ?>/img/icons/extreme.png" class="abonnementen__cards__content__icon icon-extreme"
                alt="card_icon" />
        </div>
    </div>
</form>

<!-- Maandelijkse Abonnementen -->
<h1 class="abonnementen__title">Maandelijkse Abonnementen</h1>
<form action="<?php echo e(route('abonnementen.choice')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="abonnementen__cards">
        <!-- M Basic -->
        <div class="abonnementen__cards__content">
            <h3 class="abonnementen__cards__content__title">Basic <?php echo e($pc); ?></h3>
            <p class="abonnementen__cards__content__amount">Keuze uit 7 drankjes</p>
            <p class="abonnementen__cards__content__description">Ben jij iemand die niet te veel energie drinkt, maar er
                toch van houd om een paar keer in de week een blikje te proberen dan is de <i>Basic Powercrate</i> iets
                voor jou!</p>
            <div class="abonnementen__cards__content__price">€9,99</div>
            <button type="submit" name="keuze" value="Maandelijkse - Basic"
                class="abonnementen__cards__content__purchase">Bestel</button> <br />
            <img src="<?php echo e(URL::to('/')); ?>/img/icons/basic.png" class="abonnementen__cards__content__icon icon-basic"
                alt="card_icon" />
        </div>
        <!-- M Boosted -->
        <div class="abonnementen__cards__content">
            <img src="<?php echo e(URL::to('/')); ?>/img/recommended.png" class="abonnementen__cards__content__recommended"
                alt="recommended-abonnement">
            <h3 class="abonnementen__cards__content__title">Boosted <?php echo e($pc); ?></h3>
            <p class="abonnementen__cards__content__amount">Keuze uit 14 drankjes</p>
            <p class="abonnementen__cards__content__description">Heb jij een extra boost nodig in de week? En hou je er
                ook nog is van om tussen door wat te drinken, dan is de <i>Boosted Powercrate</i> jou perfecte keuze.
            </p>
            <div class="abonnementen__cards__content__price">€19,99</div>
            <button type="submit" name="keuze" value="Maandelijkse - Boosted"
                class="abonnementen__cards__content__purchase">Bestel</button> <br />
            <img src="<?php echo e(URL::to('/')); ?>/img/icons/boosted.png" class="abonnementen__cards__content__icon icon-boosted"
                alt="card_icon" />
        </div>
        <!-- M Extreme -->
        <div class="abonnementen__cards__content">
            <h3 class="abonnementen__cards__content__title">Extreme <?php echo e($pc); ?></h3>
            <p class="abonnementen__cards__content__amount">Keuze uit 21 drankjes</p>
            <p class="abonnementen__cards__content__description">Gebruik jij te veel energie in een week en heb jij een
                bom aan energie nodig? Dan is de <i>Extreme PowerCrate</i> iets voor jou. Naast de heerlijke smaken
                waaruit je kan kiezen, krijg je genoeg energie on jou week door te brengen.</p>
            <div class="abonnementen__cards__content__price extreme_price">€29,99</div>
            <button type="submit" name="keuze" value="Maandelijkse - Extreme"
                class="abonnementen__cards__content__purchase">Bestel</button> <br />
            <img src="<?php echo e(URL::to('/')); ?>/img/icons/extreme.png" class="abonnementen__cards__content__icon icon-extreme"
                alt="card_icon" />
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ma\bewijzenmap\periode2.3\k_id\boosted-delivery\resources\views/abonnementen.blade.php ENDPATH**/ ?>