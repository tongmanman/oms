<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\OmsProductSku;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class OmsProductSkuController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new OmsProductSku(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('product_id');
            $grid->column('sku_name');
            $grid->column('image');
            $grid->column('member_price');
            $grid->column('agent_price');
            $grid->column('order');
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new OmsProductSku(), function (Show $show) {
            $show->field('id');
            $show->field('product_id');
            $show->field('sku_name');
            $show->field('image');
            $show->field('member_price');
            $show->field('agent_price');
            $show->field('order');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new OmsProductSku(), function (Form $form) {
            $form->display('id');
            $form->text('product_id');
            $form->text('sku_name');
            $form->text('image');
            $form->text('member_price');
            $form->text('agent_price');
            $form->text('order');
        });
    }
}
