<?php

namespace App\Http\Livewire\Project;

use App\Models\Project;
use Kiwilan\Steward\Http\Livewire\Traits\Notifiable;
use Livewire\Component;

class Item extends Component
{
    use Notifiable;

    public ?Project $project = null;

    public ?string $name = null;

    public ?string $url = null;

    public bool $is_enabled = false;

    public bool $with_notifications = false;

    public bool $use_discord = false;

    public bool $use_slack = false;

    public bool $use_mail = false;

    public ?string $discord_token = null;

    public ?string $slack_token = null;

    public ?string $mail_token = null;

    protected $rules = [
        'name' => 'required|string|max:255',
        'url' => 'nullable|url|max:255',
        'is_enabled' => 'nullable|boolean',
        'with_notifications' => 'nullable|boolean',
        'use_discord' => 'nullable|boolean',
        'use_slack' => 'nullable|boolean',
        'use_mail' => 'nullable|boolean',
        'discord_token' => 'nullable|string|max:255',
        'slack_token' => 'nullable|string|max:255',
        'mail_token' => 'nullable|string|max:255',
    ];

    public function regenerateToken()
    {
        $this->project->regenerateToken();
    }

    public function mount()
    {
        if ($this->project->exists()) {
            $this->name = $this->project->name;
            $this->url = $this->project->url;
            $this->is_enabled = $this->project->is_enabled;
            $this->with_notifications = $this->project->with_notifications;
            $this->use_discord = $this->project->use_discord;
            $this->use_slack = $this->project->use_slack;
            $this->use_mail = $this->project->use_mail;
            $this->discord_token = $this->project->discord_token;
            $this->slack_token = $this->project->slack_token;
            $this->mail_token = $this->project->mail_token;
        } else {
            $this->project = new Project();
        }
    }

    public function save()
    {
        $this->project->name = $this->name;
        $this->project->url = $this->url;
        $this->project->is_enabled = $this->is_enabled;
        $this->project->with_notifications = $this->with_notifications;
        $this->project->use_discord = $this->use_discord;
        $this->project->use_slack = $this->use_slack;
        $this->project->use_mail = $this->use_mail;
        $this->project->discord_token = $this->discord_token;
        $this->project->slack_token = $this->slack_token;
        $this->project->mail_token = $this->mail_token;
        $this->project->save();

        $this->notify();
    }

    public function render()
    {
        return view('livewire.project.item');
    }
}
