<?php

namespace App\Http\Livewire\Project;

use App\Models\Project;
use Illuminate\Support\Collection;
use Livewire\Component;

class Table extends Component
{
    public array $head = [
        'Name',
        'URL',
        'Key',
    ];

    /**
     * @var Collection<int, Project>
     */
    public Collection $models;

    public function fetch(): void
    {
        $this->models = Project::query()
            ->orderBy('name')
            ->get()
        ;
    }

    public function mount(): void
    {
        $this->fetch();
    }

    public function delete(int $id): void
    {
        Project::find($id)->delete();

        $this->fetch();
    }

    public function render()
    {
        return view('livewire.project.table');
    }
}
