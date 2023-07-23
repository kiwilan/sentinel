<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Trace extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'file',
        'vendor',
        'filename',
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

    protected $appends = [
        'args_to_string',
        'main_class',
    ];

    public function getArgsToStringAttribute(): ?string
    {
        return $this->flatArgs($this->args);
    }

    public function getMainFileAttribute(): ?string
    {
        return $this->vendor ? $this->vendor : $this->file;
    }

    public function getMainClassAttribute(): ?string
    {
        $main_class = $this->getMainFileAttribute();

        if ($main_class) {
            $main_class = explode('.', $main_class);

            return $main_class[0];
        }

        return null;
    }

    public function flatArgs(mixed $args, mixed $key = null, int $index = 0): ?string
    {
        $res = '';
        $index++;
        $spaces = str_repeat('-', $index * 4);

        foreach ($args as $key => $arg) {
            if (is_array($arg) && empty($arg) && is_string($key)) {
                $res .= $key."\n";
            } elseif (is_array($arg)) {
                $string = $this->flatArgs($arg, $key, $index);

                if (! empty($string)) {
                    $string = trim($string);

                    if (is_string($key)) {
                        $res .= "{$spaces}{$key}: {$string}"."\n";
                    } else {
                        $res .= $spaces.$string."\n";
                    }
                }
            } elseif (! empty($arg)) {
                $arg = trim($arg);

                if (is_string($key)) {
                    $res .= "{$spaces}{$key}: {$arg}"."\n";
                } else {
                    $res .= $spaces.$arg."\n";
                }
            }
        }

        return ! empty($res) ? trim($res) : null;
    }

    public function log(): BelongsTo
    {
        return $this->belongsTo(Log::class);
    }
}
