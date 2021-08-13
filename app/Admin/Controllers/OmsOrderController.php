<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\OmsOrder;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
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
            $grid->column('id')->sortable();
            $grid->column('order_num');
            $grid->column('user_id');
            $grid->column('name');
            $grid->column('mobile');
            $grid->column('province');
            $grid->column('city');
            $grid->column('area');
            $grid->column('address');
        
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
        return Show::make($id, new OmsOrder(), function (Show $show) {
            $show->field('id');
            $show->field('order_num');
            $show->field('user_id');
            $show->field('name');
            $show->field('mobile');
            $show->field('province');
            $show->field('city');
            $show->field('area');
            $show->field('address');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new OmsOrder(), function (Form $form) {
            $form->display('id');
            $form->text('order_num');
            $form->text('user_id');
            $form->text('name');
            $form->text('mobile');
            $form->text('province');
            $form->text('city');
            $form->text('area');
            $form->text('address');
        });
    }
}
