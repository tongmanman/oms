<?php

namespace App\Admin\Repositories;

use App\Models\OmsProduct as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class OmsProduct extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
