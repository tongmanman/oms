<?php

namespace App\Admin\Repositories;

use App\Models\OmsCart as Model;
use Dcat\Admin\Repositories\EloquentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OmsCart extends EloquentRepository
{
  /**
   * Model.
   *
   * @var string
   */
  protected $eloquentClass = Model::class;

  public static function AddToCart(Request $request)
  {
    if (Model::where('sku_id', $request->SkuID)->where('user_id', session("user.id"))->doesntExist()) {
      $e = new Model();
      $e->sku_id = $request->SkuID;
      $e->user_id = session("user.id");
      $e->save();
    }
  }

  public static function GetAllMyCartInfo()
  {
    return DB::select("SELECT oms_product_category.name AS c_name,
                              oms_product.name AS p_name,
                              oms_product_sku.sku_name AS s_name,
                              oms_cart.id AS s_id,
                              oms_product.image AS p_image,
                              oms_product_sku." . session("user.role") . "_price AS s_price 
                        FROM oms_cart,oms_product_category,oms_product,oms_product_sku 
                        WHERE oms_cart.sku_id = oms_product_sku.id 
                        AND oms_product.id = oms_product_sku.product_id 
                        AND oms_product_category.id = oms_product.category_id
                        AND oms_cart.user_id = " . session("user.id"));
  }

  public static function DelCartItem(Request $request)
  {
    Model::destroy($request->CartItemID);
  }

  public static function SaveCartItemToSession(Request $request)
  {
    session()->forget('cart');
    session()->put("cart", $request->collection);
  }
}
