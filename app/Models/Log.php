<?php

namespace App\Models;

use DateTime;
use DateTimeZone;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

/**
 * @property ?string $from_datetime
 */
class Log extends Model
{
    use HasFactory;

    protected $fillable = [
        'app',
        'env',
        'laravel_version',
        'php_version',
        'is_auth',
        'user',
        'is_production',
        'url',
        'method',
        'user_agent',
        'ip',
        'base_path',
        'datetime',
        'timezone',
        'project_id',

        'code',
        'file',
        'vendor',
        'filename',
        'line',
        'short_message',
        'message',
        'code_block',
        'trace_string',

        'is_read',
        'increment',
    ];

    protected $casts = [
        'is_auth' => 'boolean',
        'is_production' => 'boolean',
        'datetime' => 'datetime',

        'code' => 'integer',
        'line' => 'integer',
        'trace_string' => 'array',

        'is_read' => 'boolean',
        'increment' => 'integer',
    ];

    protected $appends = [
        'from_datetime',
        'is_recent',
        'main_trace',
    ];

    protected $with = [
        'traces',
    ];

    public function parseMessage(array $input): self
    {
        $message = $input['message'] ?? null;

        if ($message) {
            $this->code_block = $this->setCodeBlock($message);

            if ($this->code_block) {
                $message = str_replace("({$this->code_block})", '', $message);
            }
        }

        $this->message = $message;

        return $this;
    }

    public function saveReport(array $input): self
    {
        $trace_string = $input['trace_string'] ?? null;
        $trace_string = explode("\n", $trace_string);

        $file = $input['file'] ?? null;
        $filename = null;

        if ($file) {
            $filename = pathinfo($file, PATHINFO_FILENAME);
        }

        $this->parseMessage($input);

        $this->code = $input['code'] ?? null;
        $this->file = $file;
        $this->vendor = $this->setVendor($file);
        $this->filename = $filename;
        $this->line = $input['line'] ?? null;
        $this->trace_string = $trace_string;

        $this->save();

        $traces = $input['trace'] ?? null;

        if (is_array($traces)) {
            foreach ($traces as $trace) {
                $this->saveTrace($trace);
            }
        }

        return $this;
    }

    private function setCodeBlock(string $message): ?string
    {
        $codeBlock = null;

        if (str_contains($message, ') (')) {
            $codeBlock = explode(') (', $message);
            $codeBlock = $codeBlock[count($codeBlock) - 1];
            $codeBlock = substr($codeBlock, 0, -1);
        } elseif (str_contains($message, '(')) {
            $codeBlock = explode('(', $message);
            $codeBlock = $codeBlock[count($codeBlock) - 1];
            $codeBlock = substr($codeBlock, 0, -1);
        }

        return $codeBlock;
    }

    private function setVendor(?string $file): ?string
    {
        if (! $file) {
            return null;
        }

        $vendor = str_contains($file, 'vendor') ? $file : null;

        if ($vendor) {
            $vendor = explode('src/', $vendor);

            if (isset($vendor[1])) {
                $vendor = $vendor[1];
            } else {
                $vendor = null;
            }
        }

        return $vendor;
    }

    public function saveTrace(array $trace): void
    {
        $file_raw = $trace['file'] ?? null;
        $file = null;
        $filename = null;

        if ($file_raw) {
            $filename = pathinfo($file_raw, PATHINFO_FILENAME);
            $file = str_replace($this->base_path, '', $file_raw);

            if (substr($file, 0, 1) === '/') {
                $file = substr($file, 1);
            }
        }

        $trace = new Trace([
            'path' => $file_raw,
            'file' => $file,
            'vendor' => $this->setVendor($file),
            'filename' => $filename,
            'line' => $trace['line'] ?? null,
            'function' => $trace['function'] ?? null,
            'class' => $trace['class'] ?? null,
            'type' => $trace['type'] ?? null,
            'args' => $trace['args'] ?? null,
        ]);

        $this->traces()->save($trace);
    }

    /**
     * @return Collection<int, Log>
     */
    public function findSameErrors(): Collection
    {
        return $this->where('message', $this->message)
            ->where('id', '!=', $this->id)
            ->where('project_id', $this->project_id)
            ->get()
        ;
    }

    public function getMainTraceAttribute(): ?Trace
    {
        return $this->traces->first();
    }

    public function getIsRecentAttribute(): bool
    {
        $now = new DateTime(timezone: new DateTimeZone($this->timezone));
        $date = new DateTime($this->datetime, timezone: new DateTimeZone($this->timezone));
        $diff = $now->diff($date);

        return $diff->days < 1;
    }

    public function getFromDatetimeAttribute(): string
    {
        $now = new DateTime(timezone: new DateTimeZone($this->timezone));
        $date = new DateTime($this->datetime, timezone: new DateTimeZone($this->timezone));
        $diff = $now->diff($date);

        if ($diff->days > 0) {
            return $diff->format('%a days ago');
        }

        if ($diff->h > 0) {
            return $diff->format('%h hours ago');
        }

        if ($diff->i > 0) {
            return $diff->format('%i minutes ago');
        }

        return 'just now';
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function traces(): HasMany
    {
        return $this->hasMany(Trace::class);
    }
}
