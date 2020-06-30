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

Route::get('/catalog/products', 'API\Catalog@getProducts');

Route::get('/catalog/group', 'API\Catalog@getGroups');
Route::post('/catalog/group', 'API\Catalog@createGroup');
Route::post('/catalog/group/{id}', 'API\Catalog@updateGroup');
Route::delete('/catalog/group/{id}', 'API\Catalog@deleteGroup');

Route::get('/catalog/product', 'API\Catalog@getProduct');
Route::get('/catalog/product/{id}', 'API\Catalog@showProduct');
Route::post('/catalog/product', 'API\Catalog@createProduct');
Route::post('/catalog/product/{id}', 'API\Catalog@updateProduct');
Route::delete('/catalog/product/{id}', 'API\Catalog@deleteProduct');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
