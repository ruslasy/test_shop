<?php

use Illuminate\Support\Facades\Route;


Route::prefix('catalog')->group(function () {
    Route::get('/', 'default');
});