<?php

namespace App\Http\Controllers\Api\Admin;

use App\Contracts\Repositories\TagRepositoryInterface;
use App\Contracts\Services\TranslationServiceInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\Tag\StoreRequest;
use App\Http\Requests\Api\Admin\Tag\UpdateRequest;
use App\Models\Tag;

class TagController extends Controller
{
    private $tagRepository;

    private $translationService;

    public function __construct(
        TagRepositoryInterface $tagRepository,
        TranslationServiceInterface $translationService
    ) {
        $this->tagRepository       = $tagRepository;
        $this->translationService = $translationService;
    }

    public function index()
    {
        return $this->tagRepository->all();
    }

    public function show(Tag $tag)
    {
        return $tag;
    }

    public function store(StoreRequest $request)
    {
        $tag = $this->tagRepository->create(
            $request->validated()
        );

        $this->translationService->translate($tag);

        return $tag;
    }

    public function update(UpdateRequest $request, Tag $tag)
    {
        $updatedTag = $this->tagRepository->update(
            $tag,
            $request->validated()
        );

        $this->translationService->updateTranslation($updatedTag);

        return $updatedTag;
    }

    public function delete(Tag $tag)
    {
        $this->translationService->deleteTranslation($tag);

        return $this->tagRepository->delete(
            $tag
        );
    }
}
