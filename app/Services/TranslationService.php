<?php

namespace App\Services;

use App\Contracts\Services\TranslationServiceInterface;
use App\Contracts\Services\Yandex\TranslationServiceInterface as YandexTranslationServiceInterface;
use Illuminate\Database\Eloquent\Model;

class TranslationService implements TranslationServiceInterface
{
    private $yandexTranslationService;

    public function __construct(YandexTranslationServiceInterface $yandexTranslationService)
    {
        $this->yandexTranslationService = $yandexTranslationService;
    }

    public function translate(Model $model)
    {
        $modelAttributes = collect($model->only($model->getFillable()));

        //
    }

    public function updateTranslation(Model $model)
    {
        //
    }

    public function deleteTranslation(Model $model)
    {
        //
    }
}
