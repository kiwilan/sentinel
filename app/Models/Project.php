<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Hash;
use Kiwilan\Steward\Traits\HasSlug;
use Kiwilan\Steward\Traits\LiveQueryable;

class Project extends Model
{
    use HasFactory;
    use LiveQueryable;
    use HasSlug;

    protected $fillable = [
        'name',
        'url',
        'public_key',
        'private_key',

        'is_enabled',
        'with_notifications',
        'use_discord',
        'use_slack',
        'use_mail',
        'discord_token',
        'slack_token',
        'mail_token',
    ];

    protected $hidden = [
        'private_key',
    ];

    protected $casts = [
        'is_enabled' => 'boolean',
        'with_notifications' => 'boolean',
        'use_discord' => 'boolean',
        'use_slack' => 'boolean',
        'use_mail' => 'boolean',
    ];

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
            'public_key' => $token,
            'private_key' => Hash::make($token),
        ]);
    }

    public function logs(): HasMany
    {
        return $this->hasMany(Log::class);
    }
}
