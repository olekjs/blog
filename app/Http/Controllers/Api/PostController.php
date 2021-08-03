<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\PostRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    private $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        return $this->postRepository->all();
    }

    public function show(Post $post)
    {
        return $post
            ->query()
            ->withQueryParams()
            ->first();
    }
}
