<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class OmsOrder extends Model
{
    use HasDateTimeFormatter;
    protected $table = 'oms_order';
    public $timestamps = false;

    public function OrderDetail()
    {
        return $this->hasMany(OmsOrderDetail::class, 'order_id');
    }
}
