<?php

namespace App\Livewire\Project;

use App\Models\Project;
use Kiwilan\Steward\Traits\LiveListing;
use Livewire\Component;
use Livewire\WithPagination;

class Listing extends Component
{
    use WithPagination;
    use LiveListing;

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

    public function render()
    {
        $models = Project::query()
            ->liveFilter([
                ...$this->filter,
                'q' => $this->q,
            ])
            ->liveSort($this->sort)
            ->with($this->relations())
            ->paginate(perPage: $this->size, page: $this->page)
        ;

        return view('livewire.project.listing', [
            'models' => $models,
        ]);
    }
}
