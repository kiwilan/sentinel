<?php

namespace App\Livewire\Project;

use App\Models\Project;
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

    public bool $opened = false;

    #[Rule('file|max:1024')] // 1MB Max
    public ?TemporaryUploadedFile $json = null;

    public function openImport()
    {
        $this->opened = true;
    }

    public function save()
    {
        $this->validator();

        $this->opened = false;
        $res = $this->json->store('json');
        $path = storage_path('app/'.$res);

        if (! file_exists($path)) {
            $this->notify('File not found')
                ->send()
            ;

            return;
        }

        $data = json_decode(file_get_contents($path), true);
        unlink($path);

        foreach ($data as $key => $item) {
            $project = new Project($item);
            $project->save();
        }

        $this->json = null;
        $this->notify('Projects imported successfully')
            ->send()
        ;
        $this->dispatch('table-fetch');
    }

    public function render()
    {
        return view('livewire.project.import');
    }
}
