<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $key = '98762df2-5ae7-3ffb-94dd-05242abfd2fc';
        Project::factory()
            ->create([
                'name' => 'P1PDD',
                'url' => 'http://app.p1pdd.test',
                'public_key' => $key,
                'private_key' => Hash::make($key),
            ])
        ;

        $projects = Project::factory(25)->create();

        // $projects->each(function (Project $project): void {
        // });
    }
}
