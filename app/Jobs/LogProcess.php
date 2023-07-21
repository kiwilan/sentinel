<?php

namespace App\Jobs;

use App\Models\Log;
use App\Models\Project;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class LogProcess implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public Project $project,
        public array $request,
    ) {
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $log = Log::create([
            'app' => $this->request['app'] ?? null,
            'env' => $this->request['env'] ?? null,
            'laravel_version' => $this->request['laravel_version'] ?? null,
            'php_version' => $this->request['php_version'] ?? null,
            'is_auth' => $this->request['is_auth'] ?? null,
            'user' => $this->request['user'] ?? null,
            'is_production' => $this->request['is_production'] ?? null,
            'url' => $this->request['url'] ?? null,
            'method' => $this->request['method'] ?? null,
            'user_agent' => $this->request['user_agent'] ?? null,
            'ip' => $this->request['ip'] ?? null,
            'base_path' => $this->request['base_path'] ?? null,
            'date_time' => $this->request['date_time'] ?? null,
            'timezone' => $this->request['timezone'] ?? null,
            'project_id' => $this->project->id,
        ]);

        $current = $this->request['current'] ?? null;

        if ($current) {
            $log->saveReport($current);
        }

        // DiscordAlert::message('You have a new subscriber to the newsletter!', [
        //     [
        //         'title' => 'My title',
        //         'description' => 'My description',
        //         'color' => '#E77625',
        //         'author' => [
        //             'name' => 'Spatie',
        //             'url' => 'https://spatie.be/',
        //         ],
        //     ],
        // ]);
        // DiscordAlert::to('https://discord.com/api/webhooks/123456789/abcdefg')->message('Hello world!');
    }
}
