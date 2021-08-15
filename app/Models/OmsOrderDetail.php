<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class OmsOrderDetail extends Model
{
    use HasDateTimeFormatter;
    protected $table = 'oms_order_detail';
    public $timestamps = false;

    protected $fillable = ['id'];

    public function Order()
    {
        return $this->belongsTo(OmsOrder::class, 'order_id');
    }
}
