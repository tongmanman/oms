<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class OmsProductSku extends Model
{
    use HasDateTimeFormatter;
    protected $table = 'oms_product_sku';
    public $timestamps = false;

    protected $fillable = ['sku_name', 'member_price', 'agent_price', 'show'];

    public function Products()
    {
        return $this->belongsTo(OmsProduct::class, 'product_id', 'id');
    }
}
