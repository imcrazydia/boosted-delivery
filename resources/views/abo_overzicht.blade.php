@php
$pc = "powercrate";

switch ($keuze) {
  case 'basic':
    $title = "$keuze $pc";
    $amount = 7;
    $description = "Thank you for choosing $keuze";
    break;
  case 'boosted':
  $title = "$keuze $pc";
  $amount = 14;
  $description = "Thank you for choosing $keuze";   
    break;
  case 'extreme':
    $title = "$keuze $pc";
    $amount = 21;
    $description = "Thank you for choosing $keuze";
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
  Boosted Delivery | Abonnementen
@endsection

<!-- This is where the body starts and since there is a yield in the layout you can just create a section and start adding content -->
@section('content')
Title: {{ $title }} <br />
Amount: {{ $amount }} <br />
Description {{ $description }}
@endsection