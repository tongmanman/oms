<?php

use App\Admin\Repositories\OmsCart;
use App\Admin\Repositories\OmsOrder;
use App\Admin\Repositories\OmsProduct;
use App\Admin\Repositories\OmsProductCategory;
use App\Admin\Repositories\OmsProductSku;
use App\Http\Controllers\OmsUserController;
use Illuminate\Http\Request;
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
Route::view('/', 'index');
Route::view('/signup', 'signup');
Route::post('/signup', [OmsUserController::class, 'Signup']);
Route::post('/signin', [OmsUserController::class, 'Signin']);

//用户
Route::middleware("CheckIsLogin")->group(function () {
    //分类
    Route::view('/product_list', 'product_list', ['RootCategories' => OmsProductCategory::GetRootCategory()]);
    Route::post('/product_list_info', [OmsProduct::class, 'GetCategoryProduct']);
    Route::get('/product_detail/{id}', [OmsProductSku::class, 'GetProductDetail']);
    Route::post('/product_sku_info', [OmsProductSku::class, 'GetProductSkuInfo']);

    //购物车
    Route::post('/add_sku_to_cart', [OmsCart::class, 'AddToCart']);
    Route::view('/cart', 'cart');
    Route::post('/get_cart_item', [OmsCart::class, 'GetAllMyCartInfo']);
    Route::post('/del_cart_item', [OmsCart::class, 'DelCartItem']);
    Route::post('/save_cartitem_to_session', [OmsCart::class, 'SaveCartItemToSession']);
    Route::view('/address', 'address');
    Route::post('/make_order', [OmsOrder::class, 'MakeOrder']);

    //我
    Route::view('/my', 'my');
    Route::post('/signout', [OmsUserController::class, 'Signout']);
    Route::view('/order', 'order');
    Route::post('/get_orders_by_status', [OmsOrder::class, 'GetOrdersByStatus']);
    Route::post('/change_order_status_to_paid', [OmsOrder::class, 'ChangeOrderStatusToPaid']);
});
