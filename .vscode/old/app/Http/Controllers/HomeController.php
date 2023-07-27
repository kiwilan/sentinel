<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\View;
use Spatie\RouteAttributes\Attributes\Get;

class HomeController extends Controller
{
    #[Get('/', name: 'dashboard')]
    public function dashboard()
    {
        SEOTools::setTitle('Dashboard');
        View::share('navigation', [
            'Projects' => route('projects.index'),
        ]);

        return view('dashboard');
    }
}
