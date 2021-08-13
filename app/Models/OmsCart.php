<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class OmsCart extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'oms_cart';
    public $timestamps = false;

}
