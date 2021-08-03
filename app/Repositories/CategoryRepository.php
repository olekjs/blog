<?php

namespace App\Repositories;

use App\Contracts\Repositories\CategoryRepositoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function all()
    {
        return Category::query()
            ->withQueryParams()
            ->translated(request()->input('language'));
    }

    public function create(array $data)
    {
        return Category::create($data);
    }

    public function update(Category $category, array $data)
    {
        return tap($category)->update($data);
    }

    public function delete(Category $category)
    {
        return $category->delete();
    }
}
