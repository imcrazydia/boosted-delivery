<!-- This extends the layout to this page so that I don't have to place the header in each page individually -->
@extends('layouts.general')
<!-- This section changes the title from the page -->
<!-- Even though the <title> is in the <head> you can still use it like his -->
@section('title')
  Boosted Delivery | Product Toevoegen
@endsection

<!-- This is where the body starts and since there is a yield in the layout you can just create a section and start adding content -->
@section('content')
<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
  <div>
      <label for="">Titel</label>
      <input type="text" name="title">
  </div>
  <div>
    <label for="">Beschrijving</label>
    <input type="text" name="description">
  </div>
  <div>
    <label for="">Calorieën</label>
    <input type="text" name="calories">
  </div>
  <div>
    <label for="">Koolhydraten</label>
    <input type="text" name="carbs">
  </div>
  <div>
    <label for="">Sodium</label>
    <input type="text" name="sodium">
  </div>
  <div>
    <label for="">Suiker</label>
    <input type="text" name="sugars">
  </div>
  <div>
    <button type="submit">Product opslaan</button>
</div>
  </form>
@endsection