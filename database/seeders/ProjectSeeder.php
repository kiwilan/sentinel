<?php

namespace Database\Seeders;

use App\Models\Log;
use App\Models\Project;
use Exception;
use Illuminate\Database\Seeder;
use Kiwilan\Sentinel\Log\LogMessage;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (app()->environment('production')) {
            return;
        }

        $faker = \Faker\Factory::create();
        $projects = Project::factory(15)->create();

        $projects->each(function (Project $project) use ($faker) {
            $logs = Log::factory(50)->createQuietly();
            $logs->each(function (Log $log) use ($project, $faker) {
                $exception = LogMessage::make(new Exception($faker->sentence(), $faker->numberBetween(100, 599)));
                $log->saveReport($exception->toArray());
            });
        });
    }
}
