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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('catalog')->group(function () {
    Route::get('/', 'Catalog\CatalogController@default');
    Route::get('/product/{id}', 'Catalog\CatalogController@product')->name('product');;
    Route::get('cart/toggle/{id}', 'Catalog\CartController@toggle');
    Route::get('cart/', 'Catalog\CartController@count');


});