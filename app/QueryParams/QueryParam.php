<?php

namespace App\QueryParams;

use Closure;

abstract class QueryParam
{
    public function handle($request, Closure $next)
    {
        $builder = $next($request);

        if (!$this->isApplicable()) {
            return $builder;
        }

        return $this->applyParam($builder);
    }

    abstract protected function isApplicable();

    abstract protected function applyParam($builder);
}
