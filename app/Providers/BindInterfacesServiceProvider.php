<?php

namespace App\Providers;

use App\Contracts\Repositories\CategoryRepositoryInterface;
use App\Contracts\Repositories\FileRepositoryInterface;
use App\Contracts\Repositories\PostRepositoryInterface;
use App\Contracts\Repositories\ProjectRepositoryInterface;
use App\Contracts\Repositories\TagRepositoryInterface;
use App\Contracts\Services\FileServiceInterface;
use App\Contracts\Services\TranslationServiceInterface;
use App\Contracts\Services\Yandex\TranslationServiceInterface as YandexTranslationServiceInterface;
use App\Repositories\CategoryRepository;
use App\Repositories\FileRepository;
use App\Repositories\PostRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\TagRepository;
use App\Services\FileService;
use App\Services\TranslationService;
use App\Services\Yandex\TranslationService as YandexTranslationService;
use Illuminate\Support\ServiceProvider;

class BindInterfacesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        /**
         * Repositories
         */
        $this->app->bind(TagRepositoryInterface::class, TagRepository::class);
        $this->app->bind(FileRepositoryInterface::class, FileRepository::class);
        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);
        $this->app->bind(ProjectRepositoryInterface::class, ProjectRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);

        /**
         * Services
         */
        $this->app->bind(FileServiceInterface::class, FileService::class);
        $this->app->bind(TranslationServiceInterface::class, TranslationService::class);
        $this->app->bind(YandexTranslationServiceInterface::class, YandexTranslationService::class);
    }
}
