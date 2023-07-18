<?php

namespace App\Http\Livewire\Log;

use App\Models\Log;
use Illuminate\Support\Collection;
use Livewire\Component;

class Table extends Component
{
    public array $head = [
        'Date',
        'Env',
        'Error',
        'URL',
        'Actions',
    ];

    /**
     * @var Collection<int, Log>
     */
    public Collection $models;

    public function fetch(): void
    {
        $this->models = Log::query()
            ->with('report')
            ->orderByDesc('date_time')
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
        return view('livewire.log.table');
    }
}
