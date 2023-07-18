<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LogApiRequest;
use App\Models\Log;
use App\Models\Project;
use Illuminate\Support\Facades\Hash;
use Spatie\RouteAttributes\Attributes\Post;

class ReportController extends Controller
{
    #[Post('/reports', name: 'reports')]
    public function reports(LogApiRequest $request)
    {
        ray($request->all());
        $app = Project::where('public_key', $request->token)->first();

        if (! $app || ! Hash::check($request->token, $app->private_key)) {
            return response()->json([
                'message' => 'unauthorized',
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

        if ($request->get('previous')) {
            $previous = $request->get('previous');
            $log->saveReport($previous, 'previous');
        }

        return response()->json([
            'message' => 'success',
        ]);
    }
}
