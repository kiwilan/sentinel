<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Prefix;

#[Prefix('logs')]
class LogController extends Controller
{
    #[Get('/', name: 'logs.index')]
    public function index()
    {
        return view('pages.logs.index');
    }

    #[Get('/{log_id}', name: 'logs.show')]
    public function show(Log $log)
    {
        return view('pages.logs._id', [
            'log' => $log,
        ]);
    }
}
