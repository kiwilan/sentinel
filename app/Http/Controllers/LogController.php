<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Project;
use Illuminate\Support\Facades\View;
use Laravel\Jetstream\Http\Middleware\AuthenticateSession;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Middleware;
use Spatie\RouteAttributes\Attributes\Prefix;

#[Prefix('projects/{project_slug}/logs')]
#[Middleware(['auth:sanctum', AuthenticateSession::class, 'verified'])]
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

        return view('pages.logs._id', [
            'log' => $log,
        ]);
    }
}
