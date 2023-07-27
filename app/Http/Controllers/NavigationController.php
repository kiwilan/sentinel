<?php

namespace App\Http\Controllers;

use App\Services\PageService;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Middleware;

#[Middleware('auth')]
class NavigationController extends Controller
{
    #[Get('/')]
    public function welcome()
    {
        PageService::meta('Dashboard');
        PageService::breadcrumb([
            'Projects' => route('projects.index'),
        ]);

        return view('pages.index');
    }
}
