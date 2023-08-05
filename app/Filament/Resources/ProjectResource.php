<?php

namespace App\Filament\Resources;

use App\Enums\ProjectPriorityEnum;
use App\Enums\ProjectTypeEnum;
use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers\LogsRelationManager;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Kiwilan\Steward\Filament\Config\FilamentLayout;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return FilamentLayout::make($form, [
            FilamentLayout::column([
                [
                    Forms\Components\Toggle::make('is_enabled')
                        ->helperText('If disabled, the project will not be monitored.')
                        ->columnSpan(2),
                    Forms\Components\TextInput::make('name')
                        ->required(),
                    Forms\Components\TextInput::make('url')
                        ->url()
                        ->label('URL')
                        ->required(),
                ],
                [
                    Forms\Components\Textarea::make('comment')
                        ->columnSpan(2),
                ],
            ]),
            FilamentLayout::column([
                [
                    Forms\Components\TextInput::make('instance'),
                    Forms\Components\Select::make('type')
                        ->options(ProjectTypeEnum::toArray())
                        ->required(),
                    Forms\Components\Select::make('priority')
                        ->options(ProjectPriorityEnum::toArray())
                        ->required(),
                ],
            ], width: 1),
            FilamentLayout::column([
                [
                    Forms\Components\Toggle::make('with_notifications')
                        ->reactive(),
                    Forms\Components\Section::make('discord')
                        ->schema([
                            Forms\Components\Toggle::make('use_discord')
                                ->reactive(),
                            Forms\Components\Textarea::make('discord_token')
                                ->placeholder('000000000000000000:aBcDeFgHiJkLmNoPqRsTuVwXyZ...')
                                ->helperText(str('With this format: `ID:TOKEN`, to know more check [official documentation](https://support.discord.com/hc/en-us/articles/228383668-Intro-to-Webhooks)')->markdown()->toHtmlString())
                                ->reactive()
                                ->hidden(fn (Get $get) => ! $get('use_discord')),
                            Forms\Components\Placeholder::make('discord_preview')
                                ->label(function (Get $get) {
                                    $token = $get('discord_token');
                                    $token = str_replace(':', '/', $token);

                                    return "https://discord.com/api/webhooks/{$token}";
                                })
                                ->hidden(fn (Get $get) => ! $get('discord_token')),
                        ])
                        ->hidden(fn (Get $get) => ! $get('with_notifications')),
                    Forms\Components\Section::make('slack')
                        ->schema([
                            Forms\Components\Toggle::make('use_slack')
                                ->reactive(),
                            Forms\Components\Textarea::make('slack_token')
                                ->placeholder('T00000000:B00000000:XXXXXXXXXXXXXXXXXXXXXXXX')
                                ->helperText(str('With this format: `ID:TOKEN:CHANNEL`, to know more check [official documentation](https://api.slack.com/messaging/webhooks#enable_webhooks)')->markdown()->toHtmlString())
                                ->reactive()
                                ->hidden(fn (Get $get) => ! $get('use_slack')),
                            Forms\Components\Placeholder::make('slack_preview')
                                ->label(function (Get $get) {
                                    $token = $get('slack_token');
                                    $token = str_replace(':', '/', $token);

                                    return "https://hooks.slack.com/services/{$token}";
                                })
                                ->hidden(fn (Get $get) => ! $get('slack_token')),
                        ])
                        ->hidden(fn (Get $get) => ! $get('with_notifications')),
                    Forms\Components\Section::make('mail')
                        ->schema([
                            Forms\Components\Toggle::make('use_mail')
                                ->reactive(),
                            Forms\Components\TextInput::make('mail_token')
                                ->hidden(fn (Get $get) => ! $get('use_mail')),
                        ])
                        ->hidden(fn (Get $get) => ! $get('with_notifications')),
                ],
            ], width: 3),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                ToggleColumn::make('is_enabled')
                    ->label('Enabled')
                    ->sortable(),
                TextColumn::make('url')
                    ->label('URL')
                    ->searchable(),
                TextColumn::make('type')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('last_log_datetime')
                    ->label('Last log')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('Logs')
                    ->icon('heroicon-m-magnifying-glass')
                    ->url(fn (Project $project) => route('filament.admin.resources.projects.logs', ['record' => $project->id])),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->defaultSort('last_log_datetime', 'desc')
        ;
    }

    public static function getRelations(): array
    {
        return [
            LogsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
            'logs' => Pages\ProjectLogs::route('/{record}/logs'),
        ];
    }
}
