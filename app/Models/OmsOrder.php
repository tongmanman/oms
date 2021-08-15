<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class OmsOrder extends Model
{
    use HasDateTimeFormatter;
    protected $table = 'oms_order';
    public $timestamps = false;

    protected $fillable = ['status'];

    public function OrderDetail()
    {
        return $this->hasMany(OmsOrderDetail::class, 'order_id');
    }
}
