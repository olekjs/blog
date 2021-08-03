<?php

namespace App\View\Components\Layout;

use App\Contracts\Repositories\PostRepositoryInterface;
use Illuminate\View\Component;

class LatestPostsSection extends Component
{
    private $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.latest-posts-section', [
            'latestPosts' => $this->postRepository->getLatestPostsWithPagination(8),
        ]);
    }
}
