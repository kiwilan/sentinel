<?php

namespace App\Observers;

use App\Models\Project;

class ProjectObserver
{
    public function creating(Project $project): void
    {
        // if (! $project->key) {
        //     $project->key = Project::generateUuid();
        // }
    }
}
