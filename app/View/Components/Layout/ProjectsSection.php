<?php

namespace App\View\Components\Layout;

use App\Contracts\Repositories\ProjectRepositoryInterface;
use Illuminate\View\Component;

class ProjectsSection extends Component
{
    private $projectRepository;

    public function __construct(ProjectRepositoryInterface $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.projects-section', [
            'projects' => $this->projectRepository->all(),
        ]);
    }
}
