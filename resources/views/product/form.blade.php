<!-- This extends the layout to this page so that I don't have to place the header in each page individually -->
@extends('layouts.general')
<!-- This section changes the title from the page -->
<!-- Even though the <title> is in the <head> you can still use it like his -->
@section('title')
  Boosted Delivery | Product Toevoegen
@endsection

<!-- This is where the body starts and since there is a yield in the layout you can just create a section and start adding content -->
@section('content')
<form class="product-form" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="product-form__content">
    <div class="product-form__item">
      <label for="title">Titel:</label> <br />
      <input class="input" type="text" name="title">
  </div>
  <div class="product-form__item">
    <label for="image">Afbeelding</label> <br />
    <input class="afbeelding-button"  type="file" name="image">
  </div>
  <div class="product-form__item">
    <label for="description">Beschrijving:</label> <br />
    <input class="input" type="text" name="description">
  </div>
  <div class="product-form__item">
    <label for="description">Calorieën:</label> <br />
    <input class="input" type="text" name="calories">
  </div>
  <div class="product-form__item">
    <label for="carbs">Koolhydraten:</label> <br />
    <input class="input" type="text" name="carbs">
  </div>
  <div class="product-form__item">
    <label for="carbs">Sodium:</label> <br />
    <input class="input" type="text" name="sodium">
  </div>
  <div class="product-form__item">
    <label for="carbs">Suiker:</label> <br />
    <input class="input" type="text" name="sugars">
  </div>
  <div>
    <button class="product-form__button" type="submit">Product opslaan</button>
</div>
  </div>
  </form>
@endsection