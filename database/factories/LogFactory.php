<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Log>
 */
class LogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'app' => config('app.name'),
            'env' => config('app.env'),
            'laravel_version' => app()->version(),
            'php_version' => phpversion(),
            'is_auth' => false,
            'user' => null,
            'is_production' => false,
            'url' => $this->faker->url(),
            'method' => $this->faker->randomElement(['GET', 'POST', 'PUT', 'PATCH', 'DELETE']),
            'user_agent' => $this->faker->userAgent(),
            'ip' => $this->faker->ipv4(),
            'base_path' => base_path(),
            'datetime' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'timezone' => $this->faker->timezone(),
            'project_id' => Project::inRandomOrder()->first()->id,
        ];
    }
}
