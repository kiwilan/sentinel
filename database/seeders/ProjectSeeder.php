<?php

namespace Database\Seeders;

use App\Enums\ProjectPriorityEnum;
use App\Enums\ProjectTypeEnum;
use App\Models\Log;
use App\Models\Project;
use Exception;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $key = 'd7b57f8f-e45a-4535-a73c-44191b6a78c5';
        // Project::factory()
        //     ->create([
        //         'name' => 'P1PDD',
        //         'url' => 'http://app.p1pdd.test',
        //         'key' => $key,
        //         'is_enabled' => true,
        //         'with_notifications' => true,
        //         'use_discord' => true,
        //         'discord_token' => '934459945498320917:kLlsBIsjYoQOknTRvGNMb2MC2mpaXBW7g8wFvX-9a9oSKM9lPfHxZeQJon9RINGt-Mh5',
        //         'slack_token' => 'T054NKG4NPM:B054T6H1RPG:9M4geVMJFLUlhiXKHB2jjjKi',
        //         'mail_token' => 'ewilan.riviere@gmail.com',
        //         'type' => ProjectTypeEnum::laravel,
        //         'priority' => ProjectPriorityEnum::low,
        //         'instance' => 'local',
        //         'comment' => 'Local project of P1PDD podcast website.',
        //     ])
        // ;

        $faker = \Faker\Factory::create();
        $projects = Project::factory(25)->make();

        $projects->each(function (Project $project) use ($faker) {
            $project->create();
            $logs = Log::factory(50)->createQuietly();
            $logs->each(function (Log $log) use ($project, $faker) {
                $exception = new Exception($faker->sentence(), $faker->numberBetween(100, 599));
                $log->saveReport($exception);
            });
        });
    }
}
