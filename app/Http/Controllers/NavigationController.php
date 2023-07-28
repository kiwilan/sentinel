<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Services\PageService;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Middleware;

#[Middleware('auth')]
class NavigationController extends Controller
{
    #[Get('/', name: 'dashboard')]
    public function welcome()
    {
        PageService::meta('Dashboard');
        PageService::breadcrumb([
            'Projects' => route('projects.index'),
        ]);

        return view('pages.index');
    }

    #[Get('/sentinel', name: 'sentinel')]
    public function sentinel()
    {
        PageService::meta('Sentinel');
        PageService::breadcrumb([
            'Sentinel' => route('sentinel'),
        ]);

        return view('pages.projects.show', [
            'project' => Project::where('key', config('app.admin.token'))->first(),
        ]);
    }

    #[Get('/settings', name: 'settings')]
    public function settings()
    {
        PageService::meta('Settings');
        PageService::breadcrumb([
            'Settings' => route('settings'),
        ]);

        return view('pages.settings');
    }
}
