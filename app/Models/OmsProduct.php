<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class OmsProduct extends Model
{
    use HasDateTimeFormatter;
    protected $table = 'oms_product';
    public $timestamps = false;

    public function ProductSkus()
    {
        return $this->hasMany(OmsProductSku::class, 'product_id');
    }
}
