<?php

namespace App\Jobs;

use App\Models\Log;
use App\Models\Project;
use App\Notifications\SlackAlert;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Notification;
use Spatie\DiscordAlerts\Facades\DiscordAlert;

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
            'datetime' => $this->request['datetime'] ?? null,
            'timezone' => $this->request['timezone'] ?? null,
            'project_id' => $this->project->id,
        ]);

        $current = $this->request['current'] ?? null;

        if ($current) {
            $log->saveReport($current);
        }

        // $this->sendToDiscord($log);
        // $this->sendToSlack();
    }

    protected function sendToDiscord(Log $log): void
    {
        if (! $this->project->use_discord) {
            return;
        }

        $discord = 'https://discord.com/api/webhooks/';
        $tokens = str_replace(':', '/', $this->project->discord_token);

        $filename = $log->vendor ? $log->vendor : $log->file;
        $codeBlock = $log->code_block;
        $msg = [
            "For **{$this->project->name}**",
            "> {$log->datetime->format('Y-m-d H:i:s')}",
            "> On {$log->url} ({$log->method})",
            '',
            "{$log->message}",
            "- Class: {$log->mainTrace->class}",
            "- Function: {$log->mainTrace->function}",
            "- Filename: {$filename} (line {$log->line})",
            '',
        ];

        if ($codeBlock) {
            $msg[] = "```\n{$codeBlock}\n```";
        }

        DiscordAlert::to("{$discord}{$tokens}")
            ->message(implode(PHP_EOL, $msg))
        ;
    }

    protected function sendToSlack(): void
    {
        if (! $this->project->use_slack) {
            return;
        }

        $slack = 'https://hooks.slack.com/services/';
        $tokens = str_replace(':', '/', $this->project->slack_token);
        ray($tokens);

        // DiscordAlert::to("{$slack}{$tokens}")
        //     ->message('Hello world!')
        // ;

        // Notification::route('slack', [])
        //     ->notify(new SlackAlert())
        // ;

        $this->project->notify(new SlackAlert());
    }
}
