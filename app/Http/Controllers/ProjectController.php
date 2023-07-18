<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Prefix;

#[Prefix('projects')]
class ProjectController extends Controller
{
    #[Get('/', name: 'projects.index')]
    public function index()
    {
        return view('pages.project.index');
    }

    #[Get('/{project_slug}', name: 'projects.show')]
    public function show(Project $project)
    {
        return view('pages.projects._id', [
            'project' => $project,
        ]);
    }
}
