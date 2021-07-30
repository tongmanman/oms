<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductCategoryController;

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

//注册登录
Route::post('/signup', [UserController::class, 'Signup']);
Route::post('/signin', [UserController::class, 'Signin']);

//用户
Route::group(['prefix' => 'user'], function () {
});

//管理员
Route::group(['prefix' => 'admin'], function () {
    //产品类别
    Route::post('/ProductCategory', [ProductCategoryController::class, 'Store']);
    // Route::delete('/ProductCategory', 'ProductCategoryController@Delete');
    // Route::put('/ProductCategory', 'ProductCategoryController@Update');
    // Route::get('/ProductCategory', 'ProductCategoryController@View');
});
