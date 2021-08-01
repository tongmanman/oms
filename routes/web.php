<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductCategoryController;

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

//注册登录
Route::post('/signup', [UserController::class, 'Signup']);
Route::post('/signin', [UserController::class, 'Signin']);

//用户
Route::group(['prefix' => 'users'], function () {
    Route::view('/', 'user/index');
    Route::view('/product_list', 'user/product_list');
});
