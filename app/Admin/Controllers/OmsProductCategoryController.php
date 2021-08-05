<?php

namespace App\Admin\Controllers;

use Dcat\Admin\Form;
use Dcat\Admin\Tree;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Layout\Content;
use App\Admin\Repositories\OmsProductCategory;
use Dcat\Admin\Http\Controllers\AdminController;

class OmsProductCategoryController extends AdminController
{
    public function index(Content $content)
    {
        return $content
            ->header('产品分类')
            ->description('列表')
            ->body(function (Row $row) {
                $tree = new Tree(new OmsProductCategory);
                $tree->branch(function ($branch) {
                    return "{$branch['name']}";
                });
                $tree->expand(false);
                $tree->disableCreateButton();
                $tree->setDialogFormDimensions('30%', '25%');
                $row->column(12, $tree);
            });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new OmsProductCategory(), function (Form $form) {
            $form->select('parent_id', '上级分类')->options(function () {
                $options = OmsProductCategory::GetRootCategory();
                $selectOption = [];
                $selectOption[0] = '无';
                foreach ($options as $option) {
                    $selectOption[$option->id] = $option->text;
                }
                return $selectOption;
            });
            $form->text('name');
        });
    }
}
