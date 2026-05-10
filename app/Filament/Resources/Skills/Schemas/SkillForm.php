<?php

namespace App\Filament\Resources\Skills\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('category')
                    ->default(null),
                TextInput::make('level')
                    ->required()
                    ->numeric()
                    ->default(70),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('featured')
                    ->required(),
            ]);
    }
}
