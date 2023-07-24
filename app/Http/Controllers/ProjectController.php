<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Facades\View;
use Laravel\Jetstream\Http\Middleware\AuthenticateSession;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Middleware;
use Spatie\RouteAttributes\Attributes\Prefix;

#[Prefix('projects')]
#[Middleware(['auth:sanctum', AuthenticateSession::class, 'verified'])]
class ProjectController extends Controller
{
    #[Get('/', name: 'projects.index')]
    public function index()
    {
        View::share('navigation', [
            'Projects' => route('projects.index'),
        ]);

        return view('pages.projects.index');
    }

    #[Get('/{project_slug}', name: 'projects.show')]
    public function show(Project $project)
    {
        View::share('navigation', [
            'Projects' => route('projects.index'),
            $project->name => route('projects.show', [
                'project_slug' => $project->slug,
            ]),
        ]);

        return view('pages.projects._id', [
            'project' => $project,
        ]);
    }
}
