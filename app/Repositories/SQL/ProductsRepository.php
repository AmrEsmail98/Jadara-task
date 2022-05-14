<?php

namespace App\Repositories\SQL;

use App\Models\Products;
use App\Repositories\SQL\AbstractModelRepository;
use App\Repositories\Contracts\IproductsRepository;


class CategoryRepository extends AbstractModelRepository implements IproductsRepository
{
    /**
     * @param Products $model
     */
    public function __construct(Products $model)
    {
        parent::__construct($model);
    }


}
