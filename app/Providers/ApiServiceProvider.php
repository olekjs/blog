<?php

namespace App\Providers;

use App\Clients\YandexClient;
use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(YandexClient::class, function ($app) {
            return new YandexClient([
                'base_uri' => $app->config->get('services.yandex.uri'),
                'headers'  => [
                    'Authorization' => 'Api-Key ' . $app->config->get('services.yandex.api_token'),
                ],
            ]);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
