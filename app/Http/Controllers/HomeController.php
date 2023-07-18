<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use Laravel\Jetstream\Http\Middleware\AuthenticateSession;
use Spatie\RouteAttributes\Attributes\Get;

class HomeController extends Controller
{
    #[Get('/')]
    public function index()
    {
        return view('welcome');
    }

    #[Get('/dashboard', name: 'dashboard', middleware: [
        'auth:sanctum',
        AuthenticateSession::class,
        'verified',
    ])]
    public function dashboard()
    {
        SEOTools::setTitle('Dashboard');

        return view('dashboard');
    }
}
