<?php

namespace App\Filament\Resources\ProjectResource\RelationManagers;

use App\Filament\Resources\LogResource;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class LogsRelationManager extends RelationManager
{
    protected static string $relationship = 'logs';

    public function table(Table $table): Table
    {
        return LogResource::table($table)
            ->actions([
                Tables\Actions\ViewAction::make('view')
                    ->url('/'),
                // Tables\Actions\DeleteAction::make(),
            ])
        ;
    }
}
