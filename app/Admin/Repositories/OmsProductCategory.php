<?php

namespace App\Admin\Repositories;

use App\Models\OmsProductCategory as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class OmsProductCategory extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;

    public static function GetRootCategory()
    {
        return Model::where('parent_id', 0)->get(['id', 'name as text', 'parent_id']);
    }

    public static function GetChildCategory($id)
    {
        return Model::where('parent_id', $id)->get(['id', 'name as text', 'parent_id']);
    }

    public static function GetAllCategory()
    {
        return Model::all(['id', 'name as text', 'parent_id']);
    }

    public static function GetCategoryNameByID($id)
    {
        return Model::find($id)->name;
    }
}
