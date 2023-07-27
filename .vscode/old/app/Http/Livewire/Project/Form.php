<?php

namespace App\Http\Livewire\Project;

use App\Enums\ProjectPriorityEnum;
use App\Enums\ProjectTypeEnum;
use App\Models\Project;
use Kiwilan\Steward\Http\Livewire\Traits\LiveNotify;
use Kiwilan\Steward\Http\Livewire\Traits\LiveValidator;
use Livewire\Component;

class Form extends Component
{
    use LiveValidator;
    use LiveNotify;

    public ?Project $project = null;

    public bool $opened = false;

    public ?string $name = null;

    public ?string $url = null;

    public bool $with_notifications = false;

    public bool $use_discord = false;

    public bool $use_slack = false;

    public bool $use_mail = false;

    public ?string $discord_token = null;

    public ?string $slack_token = null;

    public ?string $mail_token = null;

    public ?string $type = null;

    public array $typeOptions = [];

    public ?string $priority = null;

    public array $priorityOptions = [];

    public ?string $instance = null;

    public ?string $comment = null;

    protected $rules = [
        'name' => 'required|string|max:255',
        'url' => 'nullable|url|max:255',
        'with_notifications' => 'nullable|boolean',
        'use_discord' => 'nullable|boolean',
        'use_slack' => 'nullable|boolean',
        'use_mail' => 'nullable|boolean',
        'discord_token' => 'nullable|string|max:255',
        'slack_token' => 'nullable|string|max:255',
        'mail_token' => 'nullable|string|max:255',
        'type' => 'nullable|string|max:255',
        'priority' => 'nullable|string|max:255',
        'instance' => 'nullable|string|max:255',
        'comment' => 'nullable|string|max:1500',
    ];

    protected $listeners = [
        'projectFormOpen' => 'open',
    ];

    public function open(int $project = null): void
    {
        if ($project) {
            $this->project = Project::findOrFail($project);
            $this->assign();
        }

        $this->opened = true;
    }

    private function assign(): void
    {
        if ($this->project) {
            $this->name = $this->project->name;
            $this->url = $this->project->url;
            $this->with_notifications = $this->project->with_notifications;
            $this->use_discord = $this->project->use_discord;
            $this->use_slack = $this->project->use_slack;
            $this->use_mail = $this->project->use_mail;
            $this->discord_token = $this->project->discord_token;
            $this->slack_token = $this->project->slack_token;
            $this->mail_token = $this->project->mail_token;
            $this->type = $this->project->type->value;
            $this->priority = $this->project->priority->value;
            $this->instance = $this->project->instance;
            $this->comment = $this->project->comment;
        }
    }

    public function mount(): void
    {
        if ($this->project) {
            $this->assign();
        }

        $this->typeOptions = ProjectTypeEnum::toArray(false);
        $this->priorityOptions = ProjectPriorityEnum::toArray(false);
    }

    public function submit()
    {
        $this->validator();

        $this->project->name = $this->name;
        $this->project->url = $this->url;
        $this->project->with_notifications = $this->with_notifications;
        $this->project->use_discord = $this->use_discord;
        $this->project->use_slack = $this->use_slack;
        $this->project->use_mail = $this->use_mail;
        $this->project->discord_token = $this->discord_token;
        $this->project->slack_token = $this->slack_token;
        $this->project->mail_token = $this->mail_token;
        $this->project->type = $this->type;
        $this->project->priority = $this->priority;
        $this->project->instance = $this->instance;
        $this->project->comment = $this->comment;
        $this->project->save();

        $this->opened = false;
        $this->notify()->success();

        $this->emit('projectItemRefresh', $this->project);
    }

    public function render()
    {
        return view('livewire.project.form');
    }
}
