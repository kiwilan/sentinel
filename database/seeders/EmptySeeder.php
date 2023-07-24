<?php

namespace Database\Seeders;

use App\Enums\ProjectPriorityEnum;
use App\Enums\ProjectTypeEnum;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EmptySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->withPersonalTeam()
            ->create([
                'name' => 'Super Admin',
                'email' => config('app.admin.email'),
                'password' => Hash::make(config('app.admin.password')),
            ])
        ;

        Project::factory()
            ->create([
                'name' => 'Sentinel',
                'url' => config('app.url'),
                'public_key' => config('app.key'),
                'private_key' => Hash::make(config('app.key')),
                'is_enabled' => true,
                'with_notifications' => false,
                'type' => ProjectTypeEnum::laravel,
                'priority' => ProjectPriorityEnum::low,
                'instance' => config('app.env'),
            ])
        ;
    }
}
