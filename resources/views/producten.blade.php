<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Boosted Delivery</title>

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo asset('/css/app.css')?>">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">Producten</div>
                <div class="links">
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/abonnementen') }}">Abonnementen</a>
                </div>
            </div>
        </div>
    </body>
</html>
