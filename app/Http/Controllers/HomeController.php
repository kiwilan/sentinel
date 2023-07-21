<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\View;
use Laravel\Jetstream\Http\Middleware\AuthenticateSession;
use Spatie\RouteAttributes\Attributes\Get;

class HomeController extends Controller
{
    #[Get('/', name: 'dashboard', middleware: [
        'auth:sanctum',
        AuthenticateSession::class,
        'verified',
    ])]
    public function dashboard()
    {
        SEOTools::setTitle('Dashboard');
        View::share('navigation', [
            'Projects' => route('projects.index'),
        ]);

        return view('dashboard');
    }
}
