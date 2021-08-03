<?php

namespace App\Repositories;

use App\Contracts\Repositories\TagRepositoryInterface;
use App\Models\Tag;

class TagRepository implements TagRepositoryInterface
{
    public function all()
    {
        return Tag::query()
            ->withQueryParams()
            ->withCount('posts')
            ->get();
    }

    public function create(array $data)
    {
        return Tag::create($data);
    }

    public function update(Tag $tag, array $data)
    {
        return tap($tag)->update($data);
    }

    public function delete(Tag $tag)
    {
        return $tag->delete();
    }
}
