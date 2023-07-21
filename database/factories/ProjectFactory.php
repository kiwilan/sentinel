<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $uuid = $this->faker->uuid();

        return [
            'name' => $this->faker->company(),
            'url' => 'http://'.$this->faker->domainName(),
            'public_key' => $uuid,
            'private_key' => Hash::make($uuid),
            'is_enabled' => true,
        ];
    }
}
