<?php

namespace App\Observers;

use App\Models\Project;
use Illuminate\Support\Facades\Hash;

class ProjectObserver
{
    public function creating(Project $project): void
    {
        if (! $project->public_key) {
            $token = Project::randomUuid();
            $project->public_key = $token;
            $project->private_key = Hash::make($token);
        }
    }
}
