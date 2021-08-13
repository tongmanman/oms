<?php

namespace App\Admin\Repositories;

use App\Models\OmsCart;
use App\Models\OmsOrder as Model;
use App\Models\OmsOrderDetail;
use App\Models\OmsProductSku;
use Dcat\Admin\Repositories\EloquentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OmsOrder extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;

    public static function MakeOrder(Request $request)
    {
        $name = $request->name;
        $mobile = $request->mobile;
        $pca = explode(' ', $request->pca);
        $address = $request->address;

        //新增order
        $o = new Model();
        $o->order_num = date("Ymd") . random_int(100000, 999999) . substr(microtime(true), -4);
        $o->user_id = session("user.id");
        $o->name = $name;
        $o->mobile = $mobile;
        $o->province = $pca[0];
        $o->city = $pca[1];
        $o->area = $pca[2];
        $o->address = $address;
        $o->save();

        //新增order detail
        foreach (session("cart") as $item) {
            $price = session("user.role") . "_price";
            $ProductInCart = OmsCart::find($item[0]);
            $ProductSku = OmsProductSku::find($ProductInCart->sku_id);

            $od = new OmsOrderDetail();
            $od->order_id = $o->id;
            $od->sku_id = $ProductSku->id;
            $od->price = $ProductSku->$price;
            $od->qty = $item[1];
            $od->save();

            OmsCart::destroy($item[0]);
        }

        //删除cart记录
        session()->forget('cart');
    }

    public static function GetOrdersByStatus(Request $request)
    {
        $ReturnArray = [];
        $OrdersInfo = Model::where("user_id", session("user.id"))->where("status", $request->status)->orderBy("create_time", "desc")->get();
        foreach ($OrdersInfo as $Order) {
            $temp = [];
            $temp["order_id"] = $Order->id;
            $temp["order_num"] = $Order->order_num;
            $OrderDetails = DB::select("SELECT  oms_product.id AS p_id, 
                                                oms_product.name AS p_name, 
                                                oms_product_sku.sku_name AS sku_name, 
                                                oms_product_sku.image AS sku_image, 
                                                oms_order_detail.price AS price, 
                                                oms_order_detail.qty AS qty
                                                FROM oms_order,oms_order_detail,oms_product,oms_product_sku
                                                WHERE oms_order.id = oms_order_detail.order_id 
                                                AND oms_order_detail.sku_id = oms_product_sku.id 
                                                AND oms_product_sku.product_id = oms_product.id 
                                                AND oms_order.id = " . $Order->id);
            $temp["count"] = count($OrderDetails);
            $PriceCount = 0;
            $temp["detail"] = [];
            foreach ($OrderDetails as $OD) {
                $PriceCount += $OD->price * $OD->qty;
                $ItemArray = [];
                $ItemArray["p_id"] = $OD->p_id;
                $ItemArray["p_name"] = $OD->p_name;
                $ItemArray["sku_name"] = $OD->sku_name;
                $ItemArray["sku_image"] = $OD->sku_image;
                $ItemArray["price"] = $OD->price;
                $ItemArray["qty"] = $OD->qty;
                array_push($temp["detail"], $ItemArray);
            }
            $temp["price"] = $PriceCount;
            array_push($ReturnArray, $temp);
        }
        return $ReturnArray;
    }

    public static function ChangeOrderStatusToPaid(Request $request)
    {
        Model::find($request->id)->update(['status' => 3]);
    }
}
