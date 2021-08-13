<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    //用户管理
    $router->resource('user', 'OmsUserController');

    //产品管理
    $router->resource('product_category', 'OmsProductCategoryController');
    $router->resource('product', 'OmsProductController');

    //订单管理
    $router->resource('order', 'OmsOrderController');
});
