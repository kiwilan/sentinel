<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Project;
use App\Services\PageService;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Middleware;
use Spatie\RouteAttributes\Attributes\Prefix;

#[Prefix('projects/{project_slug}/logs')]
#[Middleware('auth')]
class LogController extends Controller
{
    #[Get('/{log_id}', name: 'logs.show')]
    public function show(Project $project, Log $log)
    {
        PageService::meta("Project {$project->name} - Log {$log->datetime->format('Y-m-d H:m:s')}");
        PageService::breadcrumb([
            'Projects' => route('projects.index'),
            $project->name => route('projects.show', [
                'project_slug' => $project->slug,
            ]),
            "Log {$log->datetime->format('Y-m-d H:m:s')}" => route('logs.show', [
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
