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
    protected $signature = 'sentinel:self
                            {--F|force : Force the generation of a new token}';

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
        $force = $this->option('force');
        $token = $this->generateToken($force);

        $exists = Project::where('key', $token)
            ->orWhere('slug', 'sentinel')
            ->first()
        ;

        if ($exists instanceof Project) {
            $exists->delete();
        }

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

        $this->replaceDotenvValue('SENTINEL_HOST', config('app.url'));
        $this->replaceDotenvValue('SENTINEL_TOKEN', $token);

        $this->info('Sentinel project generated');

        return self::SUCCESS;
    }

    private function replaceDotenvValue(string $key, mixed $value): mixed
    {
        $dotenv = file_get_contents(base_path('.env'));

        if (str_contains($dotenv, "{$key}=")) {
            $dotenv = preg_replace("/$key=([^\n]+)/", "{$key}=", $dotenv);
            $dotenv = preg_replace("/$key=/", "{$key}=".$value, $dotenv);
        } else {
            $dotenv .= PHP_EOL."{$key}=".$value;
        }

        file_put_contents(base_path('.env'), $dotenv);

        return $value;
    }

    private function generateToken(bool $force = false): string
    {
        if (config('app.admin.token') && ! $force) {
            $this->info('Sentinel token already exists: '.config('app.admin.token'));

            return config('app.admin.token');
        }

        $token = Project::generateUuid();

        $token = $this->replaceDotenvValue('APP_ADMIN_TOKEN', $token);
        $this->info('Sentinel token generated: '.$token);

        return $token;
    }
}
