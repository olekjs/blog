<?php

namespace App\Contracts\Repositories;

use App\Models\Category;

interface CategoryRepositoryInterface
{
    public function all();

    public function create(array $data);

    public function delete(Category $category);

    public function update(Category $category, array $data);
}
