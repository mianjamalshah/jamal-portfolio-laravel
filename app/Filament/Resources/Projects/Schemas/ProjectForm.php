<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('category')
                    ->default(null),
                TextInput::make('short_description')
                    ->required(),
                Textarea::make('full_description')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('technologies')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('github_url')
                    ->url()
                    ->default(null),
                TextInput::make('live_url')
                    ->url()
                    ->default(null),
                FileUpload::make('image')
                    ->image(),
                Toggle::make('featured')
                    ->required(),
                DatePicker::make('completion_date'),
            ]);
    }
}
