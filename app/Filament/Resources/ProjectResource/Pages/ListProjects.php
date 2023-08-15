<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use App\Filament\Resources\ProjectResource;
use App\Forms\Components\DownloadButton;
use App\Models\Project;
use Filament\Actions;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Pages\ListRecords;

class ListProjects extends ListRecords
{
    protected static string $resource = ProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('upload')
                ->form([
                    DownloadButton::make('download')
                        ->label('Download Sample')
                        ->url('/documents/sample.json'),
                    FileUpload::make('json')
                        ->label('JSON File')
                        ->acceptedFileTypes(['application/json'])
                        ->required(),
                ])
                ->action(function (array $data): void {
                    $path = public_path("storage/{$data['json']}");
                    $json = json_decode(file_get_contents($path), true);

                    foreach ($json as $project) {
                        Project::create($project);
                    }

                    unlink($path);
                }),
        ];
    }
}
