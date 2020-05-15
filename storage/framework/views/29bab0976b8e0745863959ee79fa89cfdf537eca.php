<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no ,initial-scale=1, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>
        <?php $__env->startSection('title'); ?>
        Boosted Delivery
        <?php echo $__env->yieldSection(); ?>
    </title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo asset('/css/app.css')?>">
  </head>

  <body>
    <div class="menu">
        <nav class="menu__nav">
            <ul class="r-list menu__list">
                <li class="menu__group">
                    <a class="r-link menu__link" href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a>
                </li>
                <li class="menu__group">
                    <a class="r-link menu__link" href="<?php echo e(route('product.list')); ?>"><?php echo e(__('Producten')); ?></a>
                </li>
                <li class="menu__group">
                    <a class="r-link menu__link" href="<?php echo e(route('about')); ?>"><?php echo e(__('Over ons')); ?></a>
                </li>
                <?php if(auth()->guard()->guest()): ?>
                <li class="menu__group">
                    <a class="r-link menu__link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                </li>
                <?php if(Route::has('register')): ?>
                <li class="menu__group">
                    <a class="r-link menu__link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                </li>
                <?php endif; ?>
                <?php else: ?>
                <li class="menu__group">
                    <a class="r-link menu__link" href="<?php echo e(route('profiel')); ?>"><?php echo e(__('Dashboard')); ?></a>    
                </li>
                <li class="menu__group">
                    <a class="r-link menu__link" href="<?php echo e(route('product.add')); ?>"><?php echo e(__('Add')); ?></a>
                </li>
                <li class="menu__group">
                    <a class="r-link menu__link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      <?php echo e(__('Logout')); ?>

                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                      <?php echo csrf_field(); ?>
                    </form>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
        <div class="menu__toggle">
            <button class="r-button menu__hamburger">
                <span class="m-hamburger">
                    <span class="m-hamburger__label">Open menu</span>
                </span>
            </button>
        </div>
    </div>

    <!-- This is where all the pages content comes -->
    <main class="abonnementen">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- More scripts -->
    <script src="<?php echo e(asset('js/menu.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/tabs.js')); ?>" defer></script>
  </body>
</html>
<?php /**PATH D:\ma\bewijzenmap\periode2.3\k_id\boosted-delivery\resources\views/layouts/general.blade.php ENDPATH**/ ?>