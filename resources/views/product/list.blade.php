<!-- This extends the layout to this page so that I don't have to place the header in each page individually -->
@extends('layouts.general')
<!-- This section changes the title from the page -->
<!-- Even though the <title> is in the <head> you can still use it like his -->
@section('title')
  Boosted Delivery | Producten Lijst
@endsection

<!-- This is where the body starts and since there is a yield in the layout you can just create a section and start adding content -->
@section('content')
  <div class="product-list">
    @foreach ($products as $product)
        <img src="{{ asset('storage/' . $product->image) }}" alt="product image" width="100">
        <h2><a href="{{ route('product.detail', ['title' => $product->title]) }}">{{ $product->title }}</a></h2> 
    @endforeach
  </div>
@endsection