<?php

namespace App\View\Components\Layout;

use App\Contracts\Repositories\PostRepositoryInterface;
use Illuminate\View\Component;

class HeroPostSection extends Component
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
        return view('components.layout.hero-post-section', [
            'heroPost' => $this->postRepository->getHero(),
        ]);
    }
}
