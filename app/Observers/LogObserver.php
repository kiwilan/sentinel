<?php

namespace App\Observers;

use App\Models\Log;

class LogObserver
{
    public function saved(Log $log): void
    {
        if ($log->has('project')) {
            $project = $log->project;
            $project->last_log_datetime = $log->created_at;
            $project->save();
        }
    }
}
