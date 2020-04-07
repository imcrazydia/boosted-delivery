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

Route::get('/abonnementen', 'ProductController@abonnementen')->name('abonnementen');
Route::get('/abonnementen/overzicht', 'ProductController@showOverview')->name('abonnementen.overzicht');
Route::post('/abonnementen/overzicht', 'ProductController@showChoice')->name('abonnementen.choice');

Route::get('/producten', 'ProductController@index');
