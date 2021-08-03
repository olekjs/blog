<?php

namespace App\Traits;

use Illuminate\Pipeline\Pipeline;

trait HasQueryParams
{
    public static function scopeWithQueryParams($query)
    {
        return app(Pipeline::class)
            ->send($query)
            ->through(self::queryParams())
            ->thenReturn();
    }

    abstract protected static function queryParams();
}
