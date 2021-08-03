<?php

namespace App\QueryParams\Post;

use App\QueryParams\QueryParam;

class Relations extends QueryParam
{
    private $disabled = [
        //
    ];

    protected function isApplicable()
    {
        return request()->has('relations') &&
            request()->input('relations') !== null &&
            (!$this->isGuest() || !$this->hasDisabledRelation());
    }

    protected function applyParam($builder)
    {
        return $builder->with(request()->input('relations'));
    }

    private function hasDisabledRelation()
    {
        return collect(request()->input('relations'))
            ->filter(function ($relation) {
                return collect($this->disabled)->contains($relation);
            })
            ->isNotEmpty();
    }

    private function isGuest()
    {
        return auth()->user() === null;
    }
}
