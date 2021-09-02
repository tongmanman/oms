<?php

namespace App\Admin\Repositories;

use App\Models\OmsProduct as Model;
use Dcat\Admin\Repositories\EloquentRepository;
use Illuminate\Http\Request;

class OmsProduct extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;

    public static function GetCategoryProduct(Request $request)
    {
        $str = "";
        foreach (OmsProductCategory::GetChildCategory($request->CategoryID) as $ChildCategory) {
            $str .= "<h5>" . $ChildCategory->text . "</h5><ul>";
            $Products = Model::where('category_id', $ChildCategory->id)->where('show', 1)->orderBy('order', 'asc')->get();
            foreach ($Products as $Product) {
                $str .= "<li class='w-3'><a href='product_detail/" . $Product->id . "'></a> <img src='" . $Product->image . "'><span>" . $Product->name . "</span></li>";
            }
            $str .= "</ul>";
        }
        return $str;
    }

    public static function GetProductInfoByID($id)
    {
        return Model::find($id);
    }
}
