<?php

namespace App\Http\Livewire\Project;

use App\Models\Project;
use Kiwilan\Steward\Http\Livewire\Traits\LiveNotify;
use Kiwilan\Steward\Http\Livewire\Traits\LiveValidator;
use Livewire\Component;
use Livewire\ComponentConcerns\ValidatesInput;

class Item extends Component
{
    use ValidatesInput;
    use LiveValidator;
    use LiveNotify;

    public ?Project $project = null;

    public bool $is_enabled = false;

    protected $listeners = [
        'projectItemRefresh' => 'refresh',
    ];

    public function open()
    {
        $this->emit('projectFormOpen', $this->project->id);
    }

    public function refresh(Project $project)
    {
        $this->project = $project;
        $this->mount();
    }

    public function regenerateToken()
    {
        $this->project->regenerateToken();

        $this->notify()->success();
    }

    public function updatedIsEnabled()
    {
        $this->project->is_enabled = $this->is_enabled;
        $this->project->save();

        $this->notify()->success();
    }

    public function mount()
    {
        if ($this->project?->exists()) {
            $this->is_enabled = $this->project->is_enabled;
        }
    }

    public function render()
    {
        return view('livewire.project.item');
    }
}
