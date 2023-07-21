<?php

namespace App\Livewire\Log;

use App\Models\Log;
use Illuminate\Support\Collection;
use Kiwilan\Steward\Traits\LiveListing;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;
    use LiveListing;

    public array $head = [
        'Date',
        'Ago',
        'App',
        'Env.',
        'Error',
        'Method',
        'URL',
    ];

    /**
     * @var Collection<int, Log>
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
        return Log::class;
    }

    public function relations(): array
    {
        return ['project'];
    }

    public function defaultSort(): string
    {
        return '-id';
    }

    public function sortable(): array
    {
        return Log::getSortable();
    }

    public function fetch(): void
    {
        $this->models = Log::query()
            ->liveSort($this->sort)
            ->liveFilter([
                ...$this->filter,
                'q' => $this->q,
            ])
            ->with($this->relations())
            ->get()
        ;
    }

    public function delete(int $id): void
    {
        Log::find($id)->delete();

        $this->fetch();
    }

    public function render()
    {
        // $this->models = Log::query()
        //     ->liveFilter([
        //         ...$this->filter,
        //         'q' => $this->q,
        //     ])
        //     ->liveSort($this->sort)
        // ->with($this->relations())
        //     ->get()
        //     // ->paginate(perPage: $this->size, page: $this->page)
        // ;

        $this->fetch();

        return view('livewire.log.table');
    }
}
