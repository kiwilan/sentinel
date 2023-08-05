<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class EmptySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Super Admin',
            'email' => config('app.admin.email'),
            'password' => config('app.admin.password'),
        ]);

        Project::create([
            'name' => 'P1PDD',
            'url' => 'http://app.sentinel.test',
            'key' => 'd7b57f8f-e45a-4535-a73c-44191b6a78c5',
            'instance' => 'staging',
            'comment' => 'Local project of P1PDD podcast website.',
            'type' => 'laravel',
            'priority' => 'low',
            'is_enabled' => true,
            'with_notifications' => true,
            'use_discord' => true,
            'use_slack' => true,
            'use_mail' => true,
            'discord_token' => '934459945498320917:kLlsBIsjYoQOknTRvGNMb2MC2mpaXBW7g8wFvX-9a9oSKM9lPfHxZeQJon9RINGt-Mh5',
            'slack_token' => 'T054NKG4NPM:B054T6H1RPG:9M4geVMJFLUlhiXKHB2jjjKi',
            'mail_token' => 'ewilan.riviere@gmail.com',
        ]);
    }
}
