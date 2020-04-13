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

Route::prefix('/abonnementen')->group(function(){
  Route::get('/', 'ProductController@subscriptions')->name('abonnementen');
  Route::get('/overzicht', 'ProductController@showOverview')->name('abonnementen.overzicht');
  Route::post('/overzicht', 'ProductController@showChoice')->name('abonnementen.choice');
});

Route::prefix('/product')->group(function(){
  Route::get('/lijst', 'ProductController@list')->name('product.list');
  Route::get('/lijst/{title}', 'ProductController@detail')->name('product.detail');
});

Route::prefix('/admin')->group(function(){
  Route::get('/add', 'ProductController@create')->name('product.add');
  Route::post('/add', 'ProductController@store')->name('product.store');
});