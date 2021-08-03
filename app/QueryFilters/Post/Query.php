<?php

namespace App\QueryFilters\Post;

use App\QueryFilters\QueryFilter;
use Illuminate\Support\Str;

class Query extends QueryFilter
{
    protected function applyFilter($builder)
    {
        $filterValue = $this->filterValue();

        Str::of($filterValue)
            ->explode(' ')
            ->each(function ($query) use ($builder) {
                $builder
                    ->where('title', 'like', '%' . $query . '%')
                    ->orWhere('content', 'like', '%' . $query . '%');
            });

        return $builder;
    }
}
