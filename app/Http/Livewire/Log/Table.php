<?php

namespace App\Http\Livewire\Log;

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
        'Env.',
        'Error',
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
        return ['report'];
    }

    public function defaultSort(): string
    {
        return '-created_at';
    }

    public function sortable(): array
    {
        return Log::getSortable();
    }

    public function fetch(): void
    {
        $this->models = Log::query()
            ->orderBy('date_time')
            ->get()
        ;
    }

    public function mount(): void
    {
        $this->fetch();
    }

    public function delete(int $id): void
    {
        Log::find($id)->delete();

        $this->fetch();
    }

    public function render()
    {
        $this->models = Log::query()
            ->liveFilter([
                ...$this->filter,
                'q' => $this->q,
            ])
            ->liveSort($this->sort)
            ->with($this->relations())
            ->get()
            // ->paginate(perPage: $this->size, page: $this->page)
        ;

        return view('livewire.log.table');
    }
}
