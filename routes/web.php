<?php

use App\Http\Controllers\OmsUserController;
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

//注册登录
Route::post('/signup', [OmsUserController::class, 'Signup']);
Route::post('/signin', [OmsUserController::class, 'Signin']);

//用户
Route::view('/', 'index');
Route::view('/signup', 'signup');
Route::view('/product_list', 'product_list');
