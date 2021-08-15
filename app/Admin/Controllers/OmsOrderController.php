<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\OmsOrder;
use App\Admin\Repositories\OmsUser;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Form\NestedForm;
use Dcat\Admin\Http\Controllers\AdminController;

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
            //  $form->text('user_id', '下单用户')->$form->text('name');
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
            $form->hasMany('OrderDetail', function (NestedForm $form) {
                $form->text('sku_id');
                $form->text('price');
                $form->text('qty');
            })->useTable();
        });
    }
}
