<!-- This extends the layout to this page so that I don't have to place the header in each page individually -->

<!-- This section changes the title from the page -->
<!-- Even though the <title> is in the <head> you can still use it like his -->
<?php $__env->startSection('title'); ?>
Boosted Delivery | Producten Lijst
<?php $__env->stopSection(); ?>

<!-- This is where the body starts and since there is a yield in the layout you can just create a section and start adding content -->
<?php $__env->startSection('content'); ?>
<div class="about">
    <div class="about__inhoud">
        <div class="about__rij">
            <h1 class="about__title ">Wie zijn wij?</h1>
            <p class="about__content">Wij zijn een 2 mans bedrijf die dit
                heeft opgestart omdat wij dachten
                dat niemand anders deze idee had
                uitgevoerd.
                <br><br>
                Wij zijn begonnen in maart 2020
                met onze eerste schetsen en idee-
                ën. We zijn op dit moment allebei
                studenten bij het Media College
                Amsterdam.
                <br><br>
                Onze product is gemaakt om ener-
                gy liefhebbers te laten genieten
                van allerlei verschillende merken
                tegelijkertijd. Wij hebben speciaal
                voor u de beste en de lekkerste
                merken op het markt gekozen.
            </p>
        </div>

        <div class="about__img">
            <img src="<?php echo e(URL::to('/')); ?>/img/logo/logo_wit.PNG" alt="Logo">
        </div>
    </div>


</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ma\bewijzenmap\periode2.3\k_id\boosted-delivery\resources\views/about.blade.php ENDPATH**/ ?>