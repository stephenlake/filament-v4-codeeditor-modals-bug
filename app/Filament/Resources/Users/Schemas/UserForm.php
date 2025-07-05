<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\Builder;
use Filament\Forms\Components\CodeEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Builder::make('bug_Example')
                    ->schema([
                        Builder\Block::make('bug_example_block')
                            ->schema([
                                TextInput::make('whatever_this_doesnt_matter')
                            ])
                    ])
            ]);
    }
}
