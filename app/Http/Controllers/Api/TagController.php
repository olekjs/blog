<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\TagRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Models\Tag;

class TagController extends Controller
{
    private $tagRepository;

    public function __construct(TagRepositoryInterface $tagRepository)
    {
        $this->tagRepository = $tagRepository;
    }

    public function index()
    {
        return $this->tagRepository->all();
    }

    public function show(Tag $tag)
    {
        return $tag
            ->query()
            ->withQueryParams()
            ->first();
    }
}
