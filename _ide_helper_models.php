<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Log
 *
 * @property int $id
 * @property string|null $app
 * @property string|null $env
 * @property string|null $laravel_version
 * @property string|null $php_version
 * @property bool $is_auth
 * @property string|null $user
 * @property bool|null $is_production
 * @property string|null $url
 * @property string|null $method
 * @property string|null $user_agent
 * @property string|null $ip
 * @property string|null $base_path
 * @property \Illuminate\Support\Carbon|null $date_time
 * @property string $timezone
 * @property int|null $code
 * @property string|null $file
 * @property string|null $vendor
 * @property string|null $filename
 * @property int|null $line
 * @property string|null $short_message
 * @property string|null $message
 * @property string|null $code_block
 * @property array|null $trace_string
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $project_id
 * @property-read string $from_date_time
 * @property-read \App\Models\Trace|null $main_trace
 * @property-read \App\Models\Project $project
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Trace> $traces
 * @property-read int|null $traces_count
 * @method static \Database\Factories\LogFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Log liveFilter(array $filters, ?array $configuration = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Log liveSort(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|Log newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Log newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Log query()
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereApp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereBasePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereCodeBlock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereDateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereEnv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereFilename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereIsAuth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereIsProduction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereLaravelVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereLine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log wherePhpVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereShortMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereTimezone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereTraceString($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereUserAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereVendor($value)
 */
	class Log extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Project
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $url
 * @property string $key
 * @property bool $is_enabled
 * @property bool $with_notifications
 * @property bool $use_discord
 * @property bool $use_slack
 * @property bool $use_mail
 * @property string|null $discord_token
 * @property string|null $slack_token
 * @property string|null $mail_token
 * @property \App\Enums\ProjectTypeEnum $type
 * @property \App\Enums\ProjectPriorityEnum $priority
 * @property string|null $instance
 * @property string|null $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Log> $logs
 * @property-read int|null $logs_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\ProjectFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Project liveFilter(array $filters, ?array $configuration = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Project liveSort(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDiscordToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereInstance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereIsEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereMailToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereSlackToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUseDiscord($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUseMail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUseSlack($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereWithNotifications($value)
 */
	class Project extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Trace
 *
 * @property int $id
 * @property int $log_id
 * @property string|null $path
 * @property string|null $file
 * @property string|null $vendor
 * @property string|null $filename
 * @property int|null $line
 * @property string|null $function
 * @property string|null $class
 * @property string|null $type
 * @property array|null $args
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string|null $args_to_string
 * @property-read string|null $main_class
 * @property-read string|null $main_file
 * @property-read \App\Models\Log $log
 * @method static \Database\Factories\TraceFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Trace newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trace newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trace query()
 * @method static \Illuminate\Database\Eloquent\Builder|Trace whereArgs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trace whereClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trace whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trace whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trace whereFilename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trace whereFunction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trace whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trace whereLine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trace whereLogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trace wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trace whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trace whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trace whereVendor($value)
 */
	class Trace extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

