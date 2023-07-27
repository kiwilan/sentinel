<?php

namespace App\Http\Livewire\Project;

use App\Models\Project;
use Illuminate\Support\Collection;
use Kiwilan\Steward\Http\Livewire\Traits\LiveListing;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;
    use LiveListing;

    public array $headers = [
        'name' => 'Name',
        'url' => 'URL',
        'instance' => 'Instance',
        'type' => 'Type',
        'priority' => 'Priority',
        'is_enabled' => 'Enabled',
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

    protected $listeners = [
        'tableSort' => 'sort',
    ];

    public function sort(string $field): void
    {
        if ($this->sort === $field) {
            $this->sort = '-'.$field;
        } else {
            $this->sort = $field;
        }

        $this->emit('headReverse', $this->sort);
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
        return 'name';
    }

    public function sortable(): array
    {
        return Project::getSortable();
    }

    public function fetch(): void
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
    }

    public function delete(int $id): void
    {
        Project::find($id)->delete();

        // $this->fetch();
    }

    public function render()
    {
        $this->fetch();

        return view('livewire.project.table');
    }
}