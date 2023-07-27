<?php

namespace Database\Seeders;

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

        // Project::factory()
        //     ->create([
        //         'name' => 'Sentinel',
        //         'url' => config('app.url'),
        //         'key' => config('app.admin.token'),
        //         'is_enabled' => true,
        //         'with_notifications' => false,
        //         'type' => ProjectTypeEnum::laravel,
        //         'priority' => ProjectPriorityEnum::low,
        //         'instance' => config('app.env'),
        //     ])
        // ;
    }
}
