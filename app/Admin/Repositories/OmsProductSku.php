<?php

namespace App\Admin\Repositories;

use App\Models\OmsProductSku as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class OmsProductSku extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;

    
}
