<?php

namespace Database\Factories;

use App\Enums\ProjectPriorityEnum;
use App\Enums\ProjectTypeEnum;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'name' => $this->faker->company(),
            'url' => 'http://'.$this->faker->domainName(),
            'key' => $this->faker->uuid(),
            'is_enabled' => $this->faker->boolean(),
            'with_notifications' => $this->faker->boolean(),
            'use_discord' => $this->faker->boolean(),
            'discord_token' => '934459945498320917:kLlsBIsjYoQOknTRvGNMb2MC2mpaXBW7g8wFvX-9a9oSKM9lPfHxZeQJon9RINGt-Mh5',
            'slack_token' => 'T054NKG4NPM:B054T6H1RPG:9M4geVMJFLUlhiXKHB2jjjKi',
            'mail_token' => 'ewilan.riviere@gmail.com',
            'type' => $this->faker->randomElement(ProjectTypeEnum::toDatabase()),
            'priority' => $this->faker->randomElement(ProjectPriorityEnum::toDatabase()),
            'instance' => $this->faker->word(),
            'comment' => $this->faker->text(),
        ];
    }
}
