<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {

    Route::post('register', 'JWTAuthController@register');
    Route::post('login', 'JWTAuthController@login');
    Route::post('logout', 'JWTAuthController@logout');
    Route::post('refresh', 'JWTAuthController@refresh');
    Route::get('profile', 'JWTAuthController@profile');
});

Route::middleware('auth:api')->prefix('catalog')->group(function () {
    Route::get('/group', 'API\Catalog@getGroup');
    Route::post('/group', 'API\Catalog@createGroup');
    Route::post('/group/{id}', 'API\Catalog@updateGroup');
    Route::delete('/group/{id}', 'API\Catalog@deleteGroup');

    Route::get('/product/{id}', 'API\Catalog@showProduct');
    Route::post('/product', 'API\Catalog@createProduct');
    Route::post('/product/{id}', 'API\Catalog@updateProduct');
    Route::delete('/product/{id}', 'API\Catalog@deleteProduct');
});

Route::get('/catalog/product', 'API\Catalog@getProduct');
