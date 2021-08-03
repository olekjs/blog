<?php

namespace App\Contracts\Repositories;

use App\Models\Project;

interface ProjectRepositoryInterface
{
    public function all();

    public function delete(Project $project);

    public function create(array $data);

    public function update(Project $project, array $data);
}
