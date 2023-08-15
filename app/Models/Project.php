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
use Kiwilan\Steward\Traits\HasUuid;

class Project extends Model
{
    use HasFactory;
    use Notifiable;
    use HasUuid;

    protected $uuidColumn = 'key';

    protected $fillable = [
        'name',
        'url',

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

    public function scopeWhereIsNotSentinel(Builder $query): Builder
    {
        return $query->where('key', '!=', config('app.admin.token'));
    }

    public function scopeWhereIsEnabled(Builder $query): Builder
    {
        return $query->where('is_enabled', true);
    }

    public function regenerateToken(): void
    {
        $this->update([
            'key' => self::generateUuid(),
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

        return SlackRoute::make('T054NKG4NPM/B054T6H1RPG', '9M4geVMJFLUlhiXKHB2jjjKi');
    }
}
