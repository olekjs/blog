<?php

namespace App\Traits;

use Illuminate\Pipeline\Pipeline;

trait Filterable
{
    public static function scopeWithFilters($query)
    {
        return app(Pipeline::class)
            ->send($query)
            ->through(self::queryFilters())
            ->thenReturn();
    }

    abstract protected static function queryFilters();
}
