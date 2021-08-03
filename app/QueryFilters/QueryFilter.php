<?php

namespace App\QueryFilters;

use Closure;
use Illuminate\Support\Str;

abstract class QueryFilter
{
    public function handle($request, Closure $next)
    {
        if (!request()->has('filters') || !request()->has('filters.' . $this->filterName())) {
            return $next($request);
        }

        $builder = $next($request);

        return $this->applyFilter($builder);
    }

    protected function filterName()
    {
        return Str::snake(class_basename($this));
    }

    protected function filterValue()
    {
        return request()->input('filters.' . $this->filterName());
    }

    abstract protected function applyFilter($builder);
}
