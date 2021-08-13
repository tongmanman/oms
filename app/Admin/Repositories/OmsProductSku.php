<?php

namespace App\Admin\Repositories;

use App\Models\OmsProductSku as Model;
use Dcat\Admin\Repositories\EloquentRepository;
use Illuminate\Http\Request;

class OmsProductSku extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;

    public static function GetProductDetail(Request $request)
    {
        return view('product_detail', ['ProductInfo' => Omsproduct::GetProductInfoByID($request->id), 'ProductSkus' => Model::where('product_id', $request->id)->where('show', 1)->get()]);
    }

    public static function GetProductSkuInfo(Request $request)
    {
        return Model::find($request->ProductID, ['sku_name', 'image', session("user.role") . '_price as price']);
    }
}
