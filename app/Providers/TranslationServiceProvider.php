<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class TranslationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Builder::macro('translated', function ($language, $perPage = null) {
            if ($language === null) {
                return $this->get();
            }

            $this->with('translations', function ($query) use ($language) {
                return $query->where('language_id', $language->id);
            });

            return $this
                ->when($perPage !== null, function ($builder) use ($perPage) {
                    return $builder->paginate($perPage);
                }, function ($builder) {
                    return $builder->get();
                })
                ->each(function ($model) {
                    $model->translations->map(function ($translation) use ($model) {
                        collect($model->getAttributes())->map(function ($index, $attribute) use ($model, $translation) {
                            if ($translation->column_name === $attribute) {
                                $model->{$attribute} = $translation->content;
                            }
                        });
                    });

                    $model->unsetRelation('translations');
                });
        });
    }
}
