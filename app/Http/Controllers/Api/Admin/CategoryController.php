<?php

namespace App\Http\Controllers\Api\Admin;

use App\Contracts\Repositories\CategoryRepositoryInterface;
use App\Contracts\Services\TranslationServiceInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\Category\StoreRequest;
use App\Http\Requests\Api\Admin\Category\UpdateRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    private $categoryRepository;

    private $translationService;

    public function __construct(
        CategoryRepositoryInterface $categoryRepository,
        TranslationServiceInterface $translationService
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->translationService = $translationService;
    }

    public function index()
    {
        return $this->categoryRepository->all();
    }

    public function show(Category $category)
    {
        return $category;
    }

    public function store(StoreRequest $request)
    {
        $category = $this->categoryRepository->create(
            $request->validated()
        );

        $this->translationService->translate($category);

        return $category;
    }

    public function update(UpdateRequest $request, Category $category)
    {
        $updatedCategory = $this->categoryRepository->update(
            $category,
            $request->validated()
        );

        $this->translationService->updateTranslation($updatedCategory);

        return $updatedCategory;
    }

    public function delete(Category $category)
    {
        $this->translationService->deleteTranslation($category);

        return $this->categoryRepository->delete(
            $category
        );
    }
}
