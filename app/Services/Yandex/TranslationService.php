<?php

namespace App\Services\Yandex;

use App\Clients\YandexClient;
use App\Contracts\Services\Yandex\TranslationServiceInterface;

class TranslationService implements TranslationServiceInterface
{
    private $yandexClient;

    public function __construct(YandexClient $yandexClient)
    {
        $this->yandexClient = $yandexClient;
    }

    public function translate()
    {
        //
    }
}
