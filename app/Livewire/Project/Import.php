<?php

namespace App\Livewire\Project;

use Kiwilan\Steward\Livewire\Traits\LiveNotify;
use Kiwilan\Steward\Livewire\Traits\LiveValidator;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Import extends Component
{
    use LiveValidator;
    use LiveNotify;
    use WithFileUploads;

    public bool $opened = true;

    #[Rule('file|max:1024')] // 1MB Max
    public ?TemporaryUploadedFile $json;

    public function openImport()
    {
        $this->opened = true;
    }

    public function save()
    {
        ray($this->json);
        $this->json->store('photos');
    }

    public function render()
    {
        return view('livewire.project.import');
    }
}
