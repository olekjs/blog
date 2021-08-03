<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\CategoryRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        return $this->categoryRepository->all();
    }

    public function show(Category $category)
    {
        return $category
            ->query()
            ->withQueryParams()
            ->first();
    }
}
