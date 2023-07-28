<?php

namespace App\Livewire\Project;

use App\Models\Project;
use Illuminate\Support\Collection;
use Kiwilan\Steward\Livewire\Traits\LiveListing;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;
    use LiveListing;

    public array $headers = [
        'is_enabled' => 'Enabled',
        'name' => 'Name',
        'last_log_datetime' => 'Last log',
        'url' => 'URL',
        'instance' => 'Instance',
        'type' => 'Type',
        'actions' => 'Actions',
    ];

    /**
     * @var Collection<int, Project>
     */
    public Collection $models;

    public bool $full = false;

    public bool $opened = false;

    public mixed $toDelete;

    public $queryString = [
        'sort',
    ];

    public array $filter = [
        // 'is_enabled' => [],
    ];

    #[On('table-sort')]
    public function sort(string $field): void
    {
        if ($this->sort === $field) {
            $this->sort = '-'.$field;
        } else {
            $this->sort = $field;
        }

        $this->dispatch('headReverse', $this->sort);
    }

    #[On('show-full')]
    public function showFull(): void
    {
        $this->full = true;
        $this->filter = [];
    }

    public function model(): string
    {
        return Project::class;
    }

    public function relations(): array
    {
        return [];
    }

    public function defaultSort(): string
    {
        return '-last_log_datetime';
    }

    public function sortable(): array
    {
        return Project::getSortable();
    }

    #[On('table-fetch')]
    public function fetch(): void
    {
        $this->models = Project::whereIsNotSentinel()
            ->liveFilter([
                ...$this->filter,
                'q' => $this->q,
            ])
            ->liveSort($this->sort)
            ->with($this->relations())
            ->get()
        ;
        // ->paginate(perPage: $this->size, page: $this->page)
    }

    public function deleteProject()
    {
        $id = $this->toDelete['id'];
        $project = Project::whereId($id)->first();

        if ($project) {
            $project->delete();
        }

        $this->fetch();
        $this->opened = false;
        $this->toDelete = null;

        return $this->redirect(route('projects.index'));
    }

    public function mount()
    {
        $this->fetch();
    }

    public function render()
    {
        return view('livewire.project.table');
    }
}
