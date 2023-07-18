<?php

namespace App\Http\Livewire\Project;

use App\Models\Project;
use Illuminate\Support\Collection;
use Kiwilan\Steward\Traits\LiveListing;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;
    use LiveListing;

    public array $head = [
        'Name',
        'URL',
        'Key',
    ];

    /**
     * @var Collection<int, Project>
     */
    public Collection $models;

    public $queryString = [];

    public array $filter = [
        'statuses' => [],
        'armies' => [],
        'universes' => [],
        'matters' => [],
        'techniques' => [],
    ];

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
        return '-created_at';
    }

    public function sortable(): array
    {
        return Project::getSortable();
    }

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
        $this->models = Project::query()
            ->liveFilter([
                ...$this->filter,
                'q' => $this->q,
            ])
            ->liveSort($this->sort)
            ->with($this->relations())
            ->get()
            // ->paginate(perPage: $this->size, page: $this->page)
        ;

        return view('livewire.project.table');
    }
}
