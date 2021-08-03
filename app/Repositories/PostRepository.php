<?php

namespace App\Repositories;

use App\Contracts\Repositories\PostRepositoryInterface;
use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    public function all()
    {
        return Post::query()
            ->withQueryParams()
            ->withFilters()
            ->translated(request()->input('language'));
    }

    public function allWithPagination(int $perPage = 8)
    {
        return Post::query()
            ->withQueryParams()
            ->withFilters()
            ->translated(request()->input('language'), $perPage);
    }

    public function latestWithLimit(int $limit = 5)
    {
        return Post::query()
            ->withQueryParams()
            ->latest()
            ->limit($limit)
            ->translated(request()->input('language'));
    }

    public function popularWithLimit(int $limit = 5)
    {
        return Post::query()
            ->withQueryParams()
            ->oldest()
            ->limit($limit)
            ->translated(request()->input('language'));
    }

    public function getHero()
    {
        return Post::query()
            ->latest()
            ->limit(1)
            ->translated(request()->input('language'))
            ->first();
    }

    public function getLatestPostsWithPagination(int $perPage = 8)
    {
        return Post::query()
            ->latest()
            ->translated(request()->input('language'), $perPage);
    }

    public function getLatestPost()
    {
        return Post::latest()->first();
    }

    public function create(array $data)
    {
        return Post::create($data);
    }

    public function update(Post $post, array $data)
    {
        return tap($post)->update($data);
    }

    public function delete(Post $post)
    {
        return $post->delete();
    }

    public function syncTags(Post $post, array $tags)
    {
        return $post->tags()->sync($tags);
    }

    public function deleteHeroPhoto(Post $post)
    {
        return $post->hero->delete();
    }
}
