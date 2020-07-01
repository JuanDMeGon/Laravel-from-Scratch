<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
|
*/

Route::get('panel', 'PanelController@index')->name('panel');
Route::resource('products', 'ProductController');
