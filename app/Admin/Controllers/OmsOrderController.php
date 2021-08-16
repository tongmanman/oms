<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\OmsOrder;
use App\Models\OmsOrderDetail;
use App\Models\OmsProduct;
use App\Models\OmsProductCategory;
use App\Models\OmsProductSku;
use App\Models\OmsUser;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Form\NestedForm;
use Dcat\Admin\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;

class OmsOrderController extends AdminController
{

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new OmsOrder(), function (Grid $grid) {
            $grid->column('order_num');
            $grid->column('id', '金额')->display(function ($id) {
                return OmsOrderDetail::where('order_id', $id)->first(DB::raw('ROUND(SUM(price*qty),2) as amount'))->amount;
            });
            $grid->column('status')->using([
                1 => "待确认",
                2 => "待付款",
                3 => "已付款",
                4 => "已发货"
            ]);
            $grid->column('name');
            $grid->column('mobile');
            $grid->column('create_time');
            $grid->model()->orderBy('create_time', 'desc');
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('order_num');
                $filter->equal('status')->select([
                    1 => "待确认",
                    2 => "待付款",
                    3 => "已付款",
                    4 => "已发货"
                ]);
            });
            $grid->disableViewButton();
            $grid->disableEditButton();
            $grid->showQuickEditButton();
            $grid->disableCreateButton();
            $grid->setDialogFormDimensions('80%', '80%');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(OmsOrder::with("OrderDetail"), function (Form $form) {
            $form->display('order_num');
            $form->display('user_id', '下单用户')->customFormat(function () {
                return OmsUser::find($this->user_id)->mobile;
            });
            $form->display('mobile');
            $form->display('province');
            $form->display('city');
            $form->display('area');
            $form->display('address');
            $form->select('status')->options([
                1 => "待确认",
                2 => "待付款",
                3 => "已付款",
                4 => "已发货"
            ]);
            $form->hasMany('OrderDetail', '订单详情', function (NestedForm $form) {
                $form->display('sku_id', '品牌')->customFormat(function () {
                    return OmsProductCategory::find(OmsProduct::find(OmsProductSku::find($this->sku_id)->product_id)->category_id)->name;
                });
                $form->display('sku_id', '产品名称')->customFormat(function () {
                    return OmsProduct::find(OmsProductSku::find($this->sku_id)->product_id)->name;
                });
                $form->display('sku_id', '规格')->customFormat(function () {
                    return OmsProductSku::find($this->sku_id)->sku_name;
                });
                $form->display('price');
                $form->display('qty');
            })->useTable()->disableCreate();
        });
    }
}
