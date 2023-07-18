<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Auth;
use Laravel\Jetstream\Http\Middleware\AuthenticateSession;
use Spatie\RouteAttributes\Attributes\Get;

class HomeController extends Controller
{
    // #[Get('/')]
    // public function index()
    // {
    //     if (! Auth::check()) {
    //         return redirect()->route('login');
    //     }

    //     return view('dashboard');
    // }

    #[Get('/', name: 'dashboard', middleware: [
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
