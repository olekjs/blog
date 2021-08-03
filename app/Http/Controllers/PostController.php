<?php

namespace App\Http\Controllers;

use App\Contracts\Repositories\PostRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $postRepository;

    private $categoryRepository;

    private $tagRepository;

    public function __construct(
        PostRepositoryInterface $postRepository
    ) {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        return view('post.index', [
            'posts' => $this->postRepository->allWithPagination(8),
        ]);
    }

    public function show(Post $post)
    {
        return view('post.show', [
            'post' => $post->load('category', 'author', 'tags', 'hero'),
        ]);
    }
}
