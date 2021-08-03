<?php

namespace App\Contracts\Services;

use Illuminate\Database\Eloquent\Model;

interface TranslationServiceInterface
{
    public function translate(Model $model);

    public function updateTranslation(Model $model);

    public function deleteTranslation(Model $model);
}
