<?php

namespace App\Contracts\Repositories;

use App\Models\Tag;

interface TagRepositoryInterface
{
    public function all();

    public function delete(Tag $tag);

    public function create(array $data);

    public function update(Tag $tag, array $data);
}
