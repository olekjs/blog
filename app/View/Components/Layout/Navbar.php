<?php

namespace App\View\Components\Layout;

use App\Contracts\Repositories\CategoryRepositoryInterface;
use Illuminate\View\Component;

class Navbar extends Component
{
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.navbar', [
            'categories' => $this->categoryRepository->all(),
        ]);
    }
}
