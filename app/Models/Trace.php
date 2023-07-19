<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Trace extends Model
{
    use HasFactory;

    protected $fillable = [
        'file',
        'line',
        'function',
        'class',
        'type',
        'args',
    ];

    protected $casts = [
        'line' => 'integer',
        'args' => 'array',
    ];

    public function log(): BelongsTo
    {
        return $this->belongsTo(Log::class);
    }
}
