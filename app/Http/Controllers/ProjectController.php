<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Services\PageService;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Middleware;
use Spatie\RouteAttributes\Attributes\Prefix;

#[Prefix('projects')]
#[Middleware('auth')]
class ProjectController extends Controller
{
    #[Get('/', name: 'projects.index')]
    public function index()
    {
        PageService::meta('Projects');
        PageService::breadcrumb([
            'Projects' => route('projects.index'),
        ]);

        return view('pages.projects.index');
    }

    #[Get('/create', name: 'projects.create')]
    public function create()
    {
        PageService::meta('Create project');
        PageService::breadcrumb([
            'Projects' => route('projects.index'),
            'Create' => route('projects.create'),
        ]);

        return view('pages.projects.create');
    }

    #[Get('/{project_slug}', name: 'projects.show')]
    public function show(Project $project)
    {
        PageService::meta("Project {$project->name}");
        PageService::breadcrumb([
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
        PageService::meta("Edit project {$project->name}");
        PageService::breadcrumb([
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
