<!-- This extends the layout to this page so that I don't have to place the header in each page individually -->

<!-- This section changes the title from the page -->
<!-- Even though the <title> is in the <head> you can still use it like his -->
<?php $__env->startSection('title'); ?>
  Boosted Delivery | Profiel
<?php $__env->stopSection(); ?>

<!-- This is where the body starts and since there is a yield in the layout you can just create a section and start adding content -->
<?php $__env->startSection('content'); ?>
<div class="dashboard">
    <div class="dash row">
        <div class="dash-menu">
            <a class="r-link menu__link" href="<?php echo e(route('profiel.info')); ?>"><h3 class="dash-menu-text">Mijn gegevens</h3></a>
            <a class="r-link menu__link" href="<?php echo e(route('abonnementen.overzicht')); ?>"><h3 class="dash-menu-text">Abonnement aanpassen</h3></a>
            <a class="r-link menu__link" href="<?php echo e(route('product.add')); ?>"><h3 class="dash-menu-text">Product toevoegen</h3></a>
            <a class="r-link menu__link" href="<?php echo e(route('password.request')); ?>"><h3 class="dash-menu-text">Wachtwoord resetten</h3></a>
            <a class="r-link menu__link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      <h3 class="dash-menu-text">Uitloggen</h3>
                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                      <?php echo csrf_field(); ?>
                    </form>
            
        </div>
        <div class="vertical-line"></div>
        <div class="vertical-line-mobile"></div>
        <div class="dash-info">
            <h1>Welkom, <?php echo e(Auth::user()->name); ?></h1>
            <hr class="hr2">
            <h3><span>-</span> Abonnement: Boosted PowerCrate (<span>€4.49</span>)</h3>
            <h3><span>-</span> Dit is een wekelijks abonnement </h3>
            <h3><span>-</span> U heeft de volgende energie drankjes gekozen in uw Crate:</h3>

            <h3 class="drinks"><span>></span> x1 Redbull</h3>
            <h3 class="drinks"><span>></span> x2 Monster</h3>
            <h3 class="drinks"><span>></span> x3 Slammers</h3>
            <h3 class="drinks"><span>></span> x1 Bling</h3>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ma\bewijzenmap\periode2.3\k_id\boosted-delivery\resources\views/profiel.blade.php ENDPATH**/ ?>