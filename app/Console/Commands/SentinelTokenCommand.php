<?php

namespace App\Console\Commands;

use App\Models\Project;
use Illuminate\Console\Command;

class SentinelTokenCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sentinel:token';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a new Sentinel token';

    /**
     * Execute the console command.
     */
    public function handle()
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

        return self::SUCCESS;
    }
}
