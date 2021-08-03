<?php

namespace App\Contracts\Repositories;

use App\Models\Post;

interface PostRepositoryInterface
{
    public function all();

    public function getHero();

    public function delete(Post $post);

    public function create(array $data);

    public function deleteHeroPhoto(Post $post);

    public function latestWithLimit(int $limit = 5);

    public function popularWithLimit(int $limit = 5);

    public function allWithPagination(int $perPage);

    public function update(Post $post, array $data);

    public function syncTags(Post $post, array $tags);

    public function getLatestPostsWithPagination(int $perPage);
}
