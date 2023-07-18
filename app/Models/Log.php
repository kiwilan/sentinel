<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Log extends Model
{
    use HasFactory;

    protected $fillable = [
        'app',
        'env',
        'is_production',
        'url',
        'method',
        'user_agent',
        'ip',
        'date_time',
    ];

    protected $casts = [
        'is_production' => 'boolean',
        'date_time' => 'datetime',
    ];

    public function saveReport(array $input, string $type = 'report'): Report
    {
        $trace_string = $input['trace_string'] ?? null;
        $trace_string = explode("\n", $trace_string);
        $report = Report::create([
            'code' => $input['code'] ?? null,
            'file' => $input['file'] ?? null,
            'line' => $input['line'] ?? null,
            'message' => $input['message'] ?? null,
            'trace_string' => $trace_string,
        ]);

        $traces = $input['trace'] ?? null;

        if (is_array($traces)) {
            foreach ($traces as $trace) {
                $report->saveTrace($trace);
            }
        }

        $this->{$type}()->save($report);

        return $report;
    }

    public function report(): HasOne
    {
        return $this->hasOne(Report::class);
    }

    public function previous(): HasOne
    {
        return $this->hasOne(Report::class);
    }
}
