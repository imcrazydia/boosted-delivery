<!-- This extends the layout to this page so that I don't have to place the header in each page individually -->
@extends('layouts.general')
<!-- This section changes the title from the page -->
<!-- Even though the <title> is in the <head> you can still use it like his -->
@section('title')
  Boosted Delivery | Overzicht
@endsection

<!-- This is where the body starts and since there is a yield in the layout you can just create a section and start adding content -->
@section('content')
  <div class="overview">
    <h1 class="overview__title">PowerCrate samenstellen</h1>
    <h3 class="overview__subtitle">Je kan 14 drankjes kiezen</h3>
    <div class="overview__product">
      @foreach ($products as $product)
        <div class="overview__product__card">
          <img class="overview__product__card__image" src="{{ asset('storage/' . $product->image) }}" alt="product image">
          <h2 class="overview__product__card__title">{{ $product->title }}</h2>
          <form id='myform' method='POST' action='#'>
            <input type='button' value='-' class='qtyminus' field='quantity' />
            <input type='text' name='quantity' value='0' class='qty' />
            <input type='button' value='+' class='qtyplus' field='quantity' />
        </form>
        </div>
      @endforeach
    </div>
    <a class="button" href="{{ url('/#subscription') }}">
      <div class="button__back">Terug</div>
    </a>

    <a class="button" href="{{ url('/') }}">
      <div class="button__next">Volgende</div>
    </a>
  </div>

  <script src="{{ asset('js/overzicht.js') }}" defer></script>
@endsection