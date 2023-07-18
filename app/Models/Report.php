<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'file',
        'line',
        'message',
        'trace_string',
    ];

    protected $casts = [
        'code' => 'integer',
        'line' => 'integer',
        'trace_string' => 'array',
    ];

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
