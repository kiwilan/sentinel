<?php

namespace App\Livewire\Log;

use App\Models\Log;
use App\Models\Project;
use Illuminate\Support\Collection;
use Kiwilan\Steward\Livewire\Traits\LiveListing;
use Livewire\Component;
use Livewire\WithPagination;

class Listing extends Component
{
    use WithPagination;
    use LiveListing;

    public Project $project;

    /**
     * @var Collection<int, Log>
     */
    public Collection $models;

    public $queryString = [
        'sort',
    ];

    public array $filter = [
        'statuses' => [],
        'armies' => [],
        'universes' => [],
        'matters' => [],
        'techniques' => [],
    ];

    public function model(): string
    {
        return Log::class;
    }

    public function relations(): array
    {
        return [];
    }

    public function defaultSort(): string
    {
        return '-date_time';
    }

    public function sortable(): array
    {
        return Log::getSortable();
    }

    public function fetch(): void
    {
        $this->models = Log::where('project_id', $this->project->id)
            ->liveFilter([
                ...$this->filter,
                'q' => $this->q,
            ])
            ->liveSort($this->sort)
            ->with($this->relations())
            ->get()
            // ->paginate(perPage: $this->size, page: $this->page)
        ;
    }

    public function render()
    {
        $this->fetch();

        return view('livewire.log.listing');
    }
}
