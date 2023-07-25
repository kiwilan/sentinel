<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LogCreateRequest;
use App\Jobs\LogProcess;
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
        $project = Project::where('key', $request->token)->first();

        if (! $project || ! Hash::check($request->token, $project->key)) {
            return response()->json([
                'message' => 'Token is invalid',
            ], 401);
        }

        if ($project->is_enabled) {
            LogProcess::dispatch($project, $request->all());
        }

        return response()->json([
            'message' => 'success',
        ]);
    }
}
