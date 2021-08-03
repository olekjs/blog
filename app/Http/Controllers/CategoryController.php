<?php

namespace App\Http\Controllers;

use App\Contracts\Repositories\CategoryRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\App;

class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        return view('category.index', [
            'categories' => $this->categoryRepository->all(),
        ]);
    }

    public function show(Category $category)
    {
        return view('category.show', [
            'category' => $category,
            'posts'    => $category->posts()->with('author', 'category', 'tags', 'hero')->paginate(9),
        ]);
    }
}
