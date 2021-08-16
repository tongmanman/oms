<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\OmsUser;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class OmsUserController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new OmsUser(), function (Grid $grid) {
            $grid->column('mobile');
            $grid->column('is_agent')->switch();
            $grid->model()->orderBy('create_time', 'desc');
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('mobile');
            });
            $grid->disableViewButton();
            $grid->disableEditButton();
            $grid->disableCreateButton();
        });
    }
}
