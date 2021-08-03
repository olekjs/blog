<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;

Auth::routes([
    'register' => false,
]);

Route::redirect('/', app()->getLocale());

Route::middleware('detect.language')->group(function () {
    Route::prefix('{locale}')->group(function () {
        Route::get('/', [HomeController::class, 'home'])->name('home');
        Route::get('contact', [HomeController::class, 'contact'])->name('contact');
        Route::get('about-me', [HomeController::class, 'aboutMe'])->name('about-me');

        Route::prefix('categories')->name('category.')->group(function () {
            Route::get('/', [CategoryController::class, 'index'])->name('index');
            Route::get('{category:slug}', [CategoryController::class, 'show'])->name('show');
        });

        Route::prefix('tags')->name('tag.')->group(function () {
            Route::get('/', [TagController::class, 'index'])->name('index');
            Route::get('{tag:slug}', [TagController::class, 'show'])->name('show');
        });

        Route::prefix('posts')->name('post.')->group(function () {
            Route::get('/', [PostController::class, 'index'])->name('index');
            Route::get('{post:slug}', [PostController::class, 'show'])->name('show');
        });
    });
});
