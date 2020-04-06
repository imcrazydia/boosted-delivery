@php
$pc = "powercrate";

switch ($keuze) {
  case 'basic':
    $title = "$keuze $pc";
    $amount = 7;
    break;
  case 'boosted':
  $title = "$keuze $pc";
  $amount = 14;
    break;
  case 'extreme':
    $title = "$keuze $pc";
    $amount = 21;
    break;
  default:
    echo "ERROR";
    break;
}
@endphp

<!-- This extends the layout to this page so that I don't have to place the header in each page individually -->
@extends('layouts.general')
<!-- This section changes the title from the page -->
<!-- Even though the <title> is in the <head> you can still use it like his -->
@section('title')
  Boosted Delivery | Overzicht
@endsection

<!-- This is where the body starts and since there is a yield in the layout you can just create a section and start adding content -->
@section('content')
  <div class="overzicht">
    <h2 class="overzicht__title">{{ $title }}</h2>
    <p class="overzicht__counter">Je hebt nog <span class="overzicht__counter--color">{{ $amount }}</span> vrije plekken</p>
  </div>
@endsection