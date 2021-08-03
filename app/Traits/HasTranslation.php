<?php

namespace App\Traits;

use App\Models\Translation;
use Illuminate\Routing\Route;

trait HasTranslation
{
    public function resolveRouteBinding($value, $field = null)
    {
        if (is_null(request()->route('locale')) || request()->route('locale') === config('app.locale')) {
            return $this->where($field ?? 'id', $value)->firstOrFail();
        }

        $translation = Translation::query()
            ->where('translationable_type', self::class)
            ->where(function ($query) use ($field, $value) {
                return $query
                    ->where('column_name', $field)
                    ->where('content', $value);
            })
            ->firstOrFail();

        $model = $translation->translationable;

        return $this
            ->where('id', $model->id)
            ->limit(1)
            ->translated(request()->input('language'))
            ->first();
    }

    public function translations()
    {
        return $this->morphMany(Translation::class, 'translationable');
    }
}
