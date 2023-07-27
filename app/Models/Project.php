<?php

namespace App\Models;

use App\Enums\ProjectPriorityEnum;
use App\Enums\ProjectTypeEnum;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Slack\SlackRoute;
use Kiwilan\Steward\Services\Query\SortModule;
use Kiwilan\Steward\Traits\HasSlug;
use Kiwilan\Steward\Traits\LiveModelQueryable;

class Project extends Model
{
    use HasFactory;
    use LiveModelQueryable;
    use HasSlug;
    use Notifiable;

    protected $fillable = [
        'name',
        'url',
        'key',

        'is_enabled',
        'with_notifications',
        'use_discord',
        'use_slack',
        'use_mail',
        'discord_token',
        'slack_token',
        'mail_token',

        'type',
        'priority',
        'instance',
        'comment',
        'last_log_datetime',
    ];

    protected $casts = [
        'is_enabled' => 'boolean',
        'with_notifications' => 'boolean',
        'use_discord' => 'boolean',
        'use_slack' => 'boolean',
        'use_mail' => 'boolean',
        'type' => ProjectTypeEnum::class,
        'priority' => ProjectPriorityEnum::class,
        'last_log_datetime' => 'datetime',
    ];

    protected $dates = [
        'last_log_datetime',
    ];

    public static function sortable(): array
    {
        return [
            SortModule::make('name', 'Name'),
            SortModule::make('url', 'URL'),
            SortModule::make('instance', 'Instance'),
            SortModule::make('type', 'Type'),
            SortModule::make('priority', 'Priority'),
            SortModule::make('is_enabled', 'Enabled'),
        ];
    }

    public function scopeWhereIsNotSentinel(Builder $query): Builder
    {
        return $query->where('key', '!=', config('app.admin.token'));
    }

    public static function randomUuid()
    {
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand(0, 0xFFFF), mt_rand(0, 0xFFFF),

            // 16 bits for "time_mid"
            mt_rand(0, 0xFFFF),

            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand(0, 0x0FFF) | 0x4000,

            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand(0, 0x3FFF) | 0x8000,

            // 48 bits for "node"
            mt_rand(0, 0xFFFF), mt_rand(0, 0xFFFF), mt_rand(0, 0xFFFF)
        );
    }

    public function regenerateToken(): void
    {
        $token = self::randomUuid();
        $this->update([
            'key' => $token,
        ]);
    }

    public function logs(): HasMany
    {
        return $this->hasMany(Log::class);
    }

    public function routeNotificationForSlack(Notification $notification): mixed
    {
        $slack = 'https://hooks.slack.com/services/';
        $tokens = str_replace(':', '/', $this->slack_token);
        // ray($tokens);

        return SlackRoute::make('T054NKG4NPM/B054T6H1RPG', '9M4geVMJFLUlhiXKHB2jjjKi');
    }
}
