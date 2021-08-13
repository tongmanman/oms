<?php

namespace App\Admin\Repositories;

use App\Models\OmsOrderDetail as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class OmsOrderDetail extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
