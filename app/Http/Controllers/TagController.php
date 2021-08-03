<?php

namespace App\Http\Controllers;

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
        return view('tag.index', [
            'tags' => $this->tagRepository->all(),
        ]);
    }

    public function show(Tag $tag)
    {
        return view('tag.show', [
            'tag' => $tag,
        ]);
    }
}
