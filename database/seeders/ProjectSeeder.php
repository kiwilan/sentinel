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

        // $faker = \Faker\Factory::create();
        // $projects = Project::factory(15)->create();

        // $sample = file_get_contents(database_path('seeders/media/sample.json'));
        // $sample = json_decode($sample, true);

        // foreach ($sample as $data) {
        //     Project::create($data);
        // }

        // $projects->each(function (Project $project) use ($faker) {
        //     $logs = Log::factory(25)->createQuietly();
        //     $logs->each(function (Log $log) use ($project, $faker) {
        //         $exception = LogMessage::make(new Exception($faker->words($faker->numberBetween(3, 10), asText: true), $faker->numberBetween(100, 599)));
        //         $log->saveReport($exception->toArray());
        //     });
        // });
    }
}
