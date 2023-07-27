<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Project;
use Illuminate\Support\Facades\View;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Prefix;

#[Prefix('projects/{project_slug}/logs')]
class LogController extends Controller
{
    #[Get('/{log_id}', name: 'logs.show')]
    public function show(Project $project, Log $log)
    {
        View::share('navigation', [
            'Projects' => route('projects.index'),
            $project->name => route('projects.show', [
                'project_slug' => $project->slug,
            ]),
            "Log {$log->date_time->format('Y-m-d H:m:s')}" => route('logs.show', [
                'project_slug' => $project->slug,
                'log_id' => $log->id,
            ]),
        ]);

        $log->append('main_trace');

        return view('pages.logs.show', [
            'log' => $log,
        ]);
    }
}
