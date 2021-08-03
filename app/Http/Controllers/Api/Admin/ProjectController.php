<?php

namespace App\Http\Controllers\Api\Admin;

use App\Contracts\Repositories\ProjectRepositoryInterface;
use App\Contracts\Services\FileServiceInterface;
use App\Contracts\Services\TranslationServiceInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\Project\StoreRequest;
use App\Http\Requests\Api\Admin\Project\UpdateRequest;
use App\Models\Project;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    private $projectRepository;

    private $fileService;

    private $translationService;

    public function __construct(
        ProjectRepositoryInterface $projectRepository,
        FileServiceInterface $fileService,
        TranslationServiceInterface $translationService
    ) {
        $this->projectRepository  = $projectRepository;
        $this->fileService        = $fileService;
        $this->translationService = $translationService;
    }

    public function index()
    {
        return $this->projectRepository->all();
    }

    public function show(Project $project)
    {
        return $project;
    }

    public function store(StoreRequest $request)
    {
        return DB::transaction(function () use ($request) {
            $project = $this->projectRepository->create(
                $request->validated()
            );

            $this->fileService->attachToModelFromBase64(
                $project,
                'hero',
                $request->input('hero'),
                true,
                'projects'
            );

            $this->translationService->translate($project);

            return $project;
        });
    }

    public function update(UpdateRequest $request, Project $project)
    {
        return DB::transaction(function () use ($request, $project) {
            $updatedProject = $this->projectRepository->update(
                $project,
                $request->validated()
            );

            $request->whenFilled('hero', function ($heroBase64Photo) use ($project) {
                $this->fileService->delete($project->hero);

                $this->fileService->attachToModelFromBase64(
                    $project,
                    'hero',
                    $heroBase64Photo,
                    true,
                    'projects'
                );
            });

            $this->translationService->updateTranslation($updatedProject);

            return $updatedProject;
        });
    }

    public function delete(Project $project)
    {
        $this->translationService->deleteTranslation($project);

        return $this->projectRepository->delete(
            $project
        );
    }
}
