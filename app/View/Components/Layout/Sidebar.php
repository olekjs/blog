<?php

namespace App\View\Components\Layout;

use App\Contracts\Repositories\CategoryRepositoryInterface;
use App\Contracts\Repositories\PostRepositoryInterface;
use App\Contracts\Repositories\TagRepositoryInterface;
use Illuminate\View\Component;

class Sidebar extends Component
{
    private $postRepository;

    private $categoryRepository;

    private $tagRepository;

    public function __construct(
        PostRepositoryInterface $postRepository,
        CategoryRepositoryInterface $categoryRepository,
        TagRepositoryInterface $tagRepository
    ) {
        $this->postRepository     = $postRepository;
        $this->categoryRepository = $categoryRepository;
        $this->tagRepository      = $tagRepository;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.sidebar', [
            'latestPosts'  => $this->postRepository->latestWithLimit(5),
            'popularPosts' => $this->postRepository->popularWithLimit(5),
            'categories'   => $this->categoryRepository->all(),
            'tags'         => $this->tagRepository->all(),
        ]);
    }
}
