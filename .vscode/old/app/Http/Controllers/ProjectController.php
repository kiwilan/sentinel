<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Facades\View;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Prefix;

#[Prefix('projects')]
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

    #[Get('/create', name: 'projects.create')]
    public function create()
    {
        View::share('navigation', [
            'Projects' => route('projects.index'),
            'Create' => route('projects.create'),
        ]);

        return view('pages.projects.create');
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

        return view('pages.projects.show', [
            'project' => $project,
            'logs' => $project->logs,
        ]);
    }

    #[Get('/{project_slug}/edit', name: 'projects.edit')]
    public function edit(Project $project)
    {
        View::share('navigation', [
            'Projects' => route('projects.index'),
            $project->name => route('projects.show', [
                'project_slug' => $project->slug,
            ]),
            'Edit' => route('projects.edit', [
                'project_slug' => $project->slug,
            ]),
        ]);

        return view('pages.projects.edit', [
            'project' => $project,
        ]);
    }
}
