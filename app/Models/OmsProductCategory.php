<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Dcat\Admin\Traits\ModelTree;

use Illuminate\Database\Eloquent\Model;

class OmsProductCategory extends Model
{
    use HasDateTimeFormatter;
    use ModelTree;
    protected $table = 'oms_product_category';
    public $timestamps = false;
    protected $parentColumn = 'parent_id';
    protected $orderColumn = 'order';
    protected $titleColumn = 'name';
}
