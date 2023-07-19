<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kiwilan\Steward\Traits\LiveQueryable;

class Log extends Model
{
    use HasFactory;
    use LiveQueryable;

    protected $fillable = [
        'app',
        'env',
        'is_production',
        'url',
        'method',
        'user_agent',
        'ip',
        'date_time',

        'code',
        'file',
        'line',
        'message',
        'trace_string',
    ];

    protected $casts = [
        'is_production' => 'boolean',
        'date_time' => 'datetime',

        'code' => 'integer',
        'line' => 'integer',
        'trace_string' => 'array',
    ];

    public function saveReport(array $input): self
    {
        $trace_string = $input['trace_string'] ?? null;
        $trace_string = explode("\n", $trace_string);

        $this->code = $input['code'] ?? null;
        $this->file = $input['file'] ?? null;
        $this->line = $input['line'] ?? null;
        $this->message = $input['message'] ?? null;
        $this->trace_string = $trace_string;

        $traces = $input['trace'] ?? null;

        if (is_array($traces)) {
            foreach ($traces as $trace) {
                $this->saveTrace($trace);
            }
        }

        return $this;
    }

    public function saveTrace(array $trace): void
    {
        $trace = new Trace([
            'file' => $trace['file'] ?? null,
            'line' => $trace['line'] ?? null,
            'function' => $trace['function'] ?? null,
            'class' => $trace['class'] ?? null,
            'type' => $trace['type'] ?? null,
            'args' => $trace['args'] ?? null,
        ]);

        $this->traces()->save($trace);
    }

    public function traces(): HasMany
    {
        return $this->hasMany(Trace::class);
    }
}
