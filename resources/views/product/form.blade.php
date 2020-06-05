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
  <div class="product-form__header">Product Toevoegen</div>
    <div class="product-form__content row">
      <div class="row2rijen">
        <div class="row1">
            <div class="product-form__item">
                <label class="colum1" for="title">Titel:</label>
                <input class="product-form__input" type="text" name="title">
            </div>
            <div class="product-form__item">
                <label class="colum1" for="description">Beschrijving:</label>
                <input class="product-form__input" type="text" name="description">
            </div>
            <div class="product-form__item">
              <label class="colum1" for="image">Afbeelding</label>
              <input class="upload-button" style="color:white;" type="file" name="image">
          </div>
        </div>

        <div class="row2">
            <div class="product-form__item">
                <label class="colum1" for="description">Calorieën:</label>
                <input  class="product-form__input" type="text" name="calories">
            </div>
            <div class="product-form__item">
                <label class="colum1" for="carbs">Koolhydraten:</label>
                <input class="product-form__input" type="text" name="carbs">
            </div>
            <div class="product-form__item">
                <label class="colum1" for="carbs">Sodium:</label>
                <input class="product-form__input" type="text" name="sodium">
            </div>
            <div class="product-form__item">
                <label class="colum1" for="carbs">Suiker:</label>
                <input class="product-form__input" type="text" name="sugars">
            </div>
            <div class="form-button-upload">
                <button class="product-form__opslaan-button" class="product-form__button" type="submit">Product opslaan</button>
            </div>
        </div>
      </div>
    </div>
</form>
@endsection
