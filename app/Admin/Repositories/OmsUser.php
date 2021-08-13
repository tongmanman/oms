<?php

namespace App\Admin\Repositories;

use App\Models\OmsUser as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class OmsUser extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
