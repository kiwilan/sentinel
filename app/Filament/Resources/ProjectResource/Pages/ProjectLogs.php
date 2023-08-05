<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use App\Filament\Resources\LogResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Table;
use Illuminate\Contracts\Database\Eloquent\Builder;

class ProjectLogs extends ListRecords
{
    protected static string $resource = LogResource::class;

    public function table(Table $table): Table
    {
        $url = request()->url();

        $record = explode('/projects', $url)[1];
        $record = explode('/', $record)[1];

        return LogResource::table($table)
            ->modifyQueryUsing(fn (Builder $query) => $query->where('project_id', $record))
        ;
    }
}
