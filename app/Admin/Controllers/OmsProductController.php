<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\OmsProduct;
use App\Admin\Repositories\OmsProductCategory;
use Dcat\Admin\Form;
use Dcat\Admin\Form\NestedForm;
use Dcat\Admin\Grid;
use Dcat\Admin\Grid\Filter;
use Dcat\Admin\Http\Controllers\AdminController;

class OmsProductController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new OmsProduct(), function (Grid $grid) {
            $grid->column('category_id')->display(function ($category_id) {
                return OmsProductCategory::GetCategoryNameByID($category_id);
            });
            $grid->column('name');
            $grid->column('image')->image('', 50);
            $grid->column('show')->switch();

            $grid->filter(function (Filter $filter) {
                $filter->like('name');
            });
            $grid->disableViewButton();
            $grid->disableEditButton();
            $grid->showQuickEditButton();
            $grid->setDialogFormDimensions('50%', '50%');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $repository = new OmsProduct(['ProductSkus']);
        return Form::make($repository, function (Form $form) {
            $form->select('category_id', '产品目录')->options(function () {
                $options = OmsProductCategory::GetRootCategory();
                $selectOption = [];
                foreach ($options as $option) {
                    $selectOption[$option->id] = $option->text;
                    $ChildCategorys = OmsProductCategory::GetChildCategory($option->id);
                    foreach ($ChildCategorys as $ChildCategory) {
                        $selectOption[$ChildCategory->id] = '|——' . $ChildCategory->text;
                    }
                }
                return $selectOption;
            });
            $form->text('name');
            $form->text('image');
            $form->switch('show');
            $form->hasMany('ProductSkus', function (NestedForm $form) {
                $form->text('sku_name');
                $form->text('image');
                $form->text('member_price');
                $form->text('agent_price');
                $form->switch('show');
            })->useTable();
        });
    }
}
