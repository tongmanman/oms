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

Route::group(['prefix' => 'users'], function () {
    Route::view('/', 'user/index');
});


Route::group(['prefix' => 'admin'], function () {
    Route::view('/', 'admin/index');
    Route::view('/product_category', 'admin/product_category');
    Route::view('/product_category_add', 'admin/product_category_add');
});
