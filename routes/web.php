<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('/over-ons', function () {
  return view('about');
})->name('about');

Route::prefix('/abonnementen')->group(function(){
  Route::get('/overzicht', 'ProductController@listSubscription')->name('abonnementen.overzicht');
  Route::get('/jouw-powercrate', function () {
    return view('powercrate');
  })->name('powercrate');
});

Route::prefix('/afrekenen')->middleware('auth')->group(function(){
  Route::get('/', function () {
    return view('afrekenen');
  })->name('afrekenen');

  Route::get('/besteld', function () {
    return view('besteld');
  })->name('besteld');
});

Route::prefix('/product')->group(function(){
  Route::get('/lijst', 'ProductController@list')->name('product.list');
  Route::get('/lijst/{title}', 'ProductController@detail')->name('product.detail');
});

Route::prefix('/profiel')->middleware('auth')->group(function(){
  Route::get('/', 'HomeController@profile')->name('profiel');
  Route::get('/mijn-gegevens', function () {
    return view('profiel.my_info');
  })->name('profiel.info');
});

Route::prefix('/admin')->middleware('auth')->group(function(){
  Route::get('/add', 'ProductController@create')->name('product.add');
  Route::post('/add', 'ProductController@store')->name('product.store');
});

Auth::routes();


