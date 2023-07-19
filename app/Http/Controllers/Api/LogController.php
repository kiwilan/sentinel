<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LogCreateRequest;
use App\Models\Log;
use App\Models\Project;
use Illuminate\Support\Facades\Hash;
use Spatie\RouteAttributes\Attributes\Middleware;
use Spatie\RouteAttributes\Attributes\Post;
use Spatie\RouteAttributes\Attributes\Prefix;

#[Prefix('api/logs')]
#[Middleware('api')]
class LogController extends Controller
{
    #[Post('/', name: 'api.logs.create')]
    public function create(LogCreateRequest $request)
    {
        $app = Project::where('public_key', $request->token)->first();

        if (! $app || ! Hash::check($request->token, $app->private_key)) {
            return response()->json([
                'message' => 'Token is invalid',
            ], 401);
        }

        $log = Log::create([
            'app' => $request->input('app'),
            'env' => $request->input('env'),
            'is_production' => $request->input('is_production'),
            'url' => $request->input('url'),
            'method' => $request->input('method'),
            'user_agent' => $request->input('user_agent'),
            'ip' => $request->input('ip'),
            'date_time' => $request->input('date_time'),
        ]);

        if ($request->get('current')) {
            $current = $request->get('current');
            $log->saveReport($current);
        }

        return response()->json([
            'message' => 'success',
            'log' => $log->toArray(),
        ]);
    }
}
