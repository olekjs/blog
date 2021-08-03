<?php

namespace App\QueryParams\Tag;

use App\QueryParams\QueryParam;

class SelectSpecificColumns extends QueryParam
{
    protected function isApplicable()
    {
        return request()->has('only') && request()->input('only') !== null;
    }

    protected function applyParam($builder)
    {
        return $builder->select(request()->input('only'));
    }
}
