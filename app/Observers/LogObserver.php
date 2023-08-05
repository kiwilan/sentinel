<?php

namespace App\Observers;

use App\Models\Log;
use Illuminate\Support\Carbon;

class LogObserver
{
    public function saved(Log $log): void
    {
        if ($log->project !== null) {
            $project = $log->project;
            $tz = new \DateTimeZone($log->timezone);

            try {
                $project->last_log_datetime = new Carbon($log->datetime->format('Y-m-d H:i:s'), $tz);
                $project->save();
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
    }
}
