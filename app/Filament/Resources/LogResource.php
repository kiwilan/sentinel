<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LogResource\Pages;
use App\Infolists\Components\CodeBlock;
use App\Models\Log;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontFamily;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LogResource extends Resource
{
    protected static ?string $model = Log::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\Section::make(fn (Log $record) => "In {$record->app} at {$record->datetime} ({$record->from_datetime})")
                    ->description(fn (Log $record) => str("Env. `{$record->env}` | Laravel `{$record->laravel_version}` | PHP `{$record->php_version}`")
                        ->markdown()
                        ->toHtmlString())
                    ->schema([
                        Infolists\Components\Fieldset::make('main')
                            ->label('Main info')
                            ->schema([
                                Infolists\Components\TextEntry::make('message')
                                    ->columnSpan(2),
                                Infolists\Components\TextEntry::make('filename'),
                                Infolists\Components\TextEntry::make('vendor')
                                    ->hidden(fn (Log $record) => empty($record->vendor)),
                                Infolists\Components\TextEntry::make('file'),
                                Infolists\Components\TextEntry::make('line'),
                                Infolists\Components\TextEntry::make('code')
                                    ->hidden(fn (Log $record) => empty($record->code) || $record->code == 0),
                                Infolists\Components\TextEntry::make('user')
                                    ->hidden(fn (Log $record) => ! $record->is_auth),
                            ])
                            ->columns(3),
                        Infolists\Components\Fieldset::make('where')
                            ->label('Where')
                            ->schema([
                                Infolists\Components\TextEntry::make('method'),
                                Infolists\Components\TextEntry::make('url')
                                    ->columnSpan(2),
                                Infolists\Components\IconEntry::make('is_production')
                                    ->label('Production')
                                    ->boolean(),
                                Infolists\Components\TextEntry::make('ip'),
                                Infolists\Components\TextEntry::make('user_agent'),
                            ])
                            ->columns(3),
                        Infolists\Components\Fieldset::make('code_block')
                            ->label('Code block')
                            ->schema([
                                Infolists\Components\TextEntry::make('code_block')
                                    ->fontFamily(FontFamily::Mono)
                                    ->columnSpanFull(),
                            ])
                            ->hidden(fn (Log $record) => empty($record->code_block)),
                        CodeBlock::make('main_trace')
                            ->columnSpanFull(),
                    ])
                    ->columns(3),
                Infolists\Components\Fieldset::make('trace')
                    ->label('Trace')
                    ->schema([
                        CodeBlock::make('trace_string')
                            ->columnSpanFull(),
                    ]),
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
                Tables\Actions\ViewAction::make()
                    ->url(fn (Log $record) => route('filament.admin.resources.logs.view', ['record' => $record->id])),
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
