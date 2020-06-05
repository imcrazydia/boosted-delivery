<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>

  <body>
    <div id="app">
        <div class="menu">
            <nav class="menu__nav">
                <ul class="r-list menu__list">
                    <li class="menu__group">
                        <img class="nav_logo" src="<?php echo e(URL::to('/')); ?>/img/logo/logo_wit.png" alt="navigation logo">
                    </li>
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

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

    <!-- More scripts -->
    <script src="<?php echo e(asset('js/menu.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/tabs.js')); ?>" defer></script>
  </body>
</html>
<?php /**PATH D:\ma\bewijzenmap\periode2.3\k_id\boosted-delivery\resources\views/layouts/app.blade.php ENDPATH**/ ?>