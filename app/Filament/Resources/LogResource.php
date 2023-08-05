<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LogResource\Pages;
use App\Models\Log;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LogResource extends Resource
{
    protected static ?string $model = Log::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('message'),
                TextEntry::make('code_block'),
                TextEntry::make('filename')
                    ->columnSpanFull(),
            ])
        ;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('message')
                    ->limit(50)
                    ->searchable()
                    ->sortable(),
                TextColumn::make('datetime')
                    ->dateTime('Y-m-d H:i:s')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('project.name')
                    ->searchable()
                    ->sortable(),
                IconColumn::make('is_production')
                    ->label('Production')
                    ->sortable()
                    ->boolean(),
                TextColumn::make('url')
                    ->limit(50),
                TextColumn::make('method'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->defaultSort('datetime', 'desc')
        ;
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLogs::route('/'),
            'view' => Pages\ViewLog::route('/{record}'),
        ];
    }
}
