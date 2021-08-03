<?php

namespace App\Http\Controllers\Api\Admin;

use App\Contracts\Repositories\PostRepositoryInterface;
use App\Contracts\Services\FileServiceInterface;
use App\Contracts\Services\TranslationServiceInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\Post\StoreRequest;
use App\Http\Requests\Api\Admin\Post\SyncTagsRequest;
use App\Http\Requests\Api\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    private $postRepository;

    private $fileService;

    private $translationService;

    public function __construct(
        PostRepositoryInterface $postRepository,
        FileServiceInterface $fileService,
        TranslationServiceInterface $translationService
    ) {
        $this->postRepository     = $postRepository;
        $this->fileService        = $fileService;
        $this->translationService = $translationService;
    }

    public function index()
    {
        return $this->postRepository->all();
    }

    public function show(Post $post)
    {
        return $post;
    }

    public function store(StoreRequest $request)
    {
        return DB::transaction(function () use ($request) {
            $post = $this->postRepository->create(
                $request->validated()
            );

            $this->fileService->attachToModelFromBase64(
                $post,
                'hero',
                $request->input('hero'),
                true,
                'posts'
            );

            $this->translationService->translate($post);

            return $post;
        });
    }

    public function update(UpdateRequest $request, Post $post)
    {
        return DB::transaction(function () use ($request, $post) {
            $updatedPost = $this->postRepository->update(
                $post,
                $request->validated()
            );

            $request->whenFilled('hero', function ($heroBase64Photo) use ($post) {
                $this->fileService->delete($post->hero);

                $this->fileService->attachToModelFromBase64(
                    $post,
                    'hero',
                    $heroBase64Photo,
                    true,
                    'posts'
                );
            });

            $this->translationService->updateTranslation($updatedPost);

            return $updatedPost;
        });
    }

    public function delete(Post $post)
    {
        $this->translationService->deleteTranslation($post);

        return $this->postRepository->delete(
            $post
        );
    }

    public function syncTags(SyncTagsRequest $request, Post $post)
    {
        return $this->postRepository->syncTags(
            $post,
            $request->input('tags')
        );
    }
}
