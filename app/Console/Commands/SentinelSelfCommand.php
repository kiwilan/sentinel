<?php

namespace App\Console\Commands;

use App\Enums\ProjectPriorityEnum;
use App\Enums\ProjectTypeEnum;
use App\Models\Project;
use Illuminate\Console\Command;

class SentinelSelfCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sentinel:self';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a new project token to track Sentinel itself';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $token = $this->generateToken();

        Project::create([
            'name' => 'Sentinel',
            'url' => config('app.url'),
            'key' => $token,
            'is_enabled' => true,
            'with_notifications' => false,
            'type' => ProjectTypeEnum::laravel,
            'priority' => ProjectPriorityEnum::low,
            'instance' => config('app.env'),
            'comment' => 'This project is used to track Sentinel itself',
        ]);

        $this->info('Sentinel project generated');

        return self::SUCCESS;
    }

    private function generateToken()
    {
        $dotenv = file_get_contents(base_path('.env'));
        $token = Project::randomUuid();

        if (str_contains($dotenv, 'APP_ADMIN_TOKEN=')) {
            // delete the existing token
            $dotenv = preg_replace('/APP_ADMIN_TOKEN=([^\n]+)/', 'APP_ADMIN_TOKEN=', $dotenv);
            $dotenv = preg_replace('/APP_ADMIN_TOKEN=/', 'APP_ADMIN_TOKEN='.$token, $dotenv);
            file_put_contents(base_path('.env'), $dotenv);
        } else {
            // add the token
            $dotenv .= PHP_EOL.'APP_ADMIN_TOKEN='.$token;
            file_put_contents(base_path('.env'), $dotenv);
        }

        $this->info('Sentinel token generated: '.$token);

        return $token;
    }
}
