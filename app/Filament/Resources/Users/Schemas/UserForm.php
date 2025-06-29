<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\CodeEditor;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                CodeEditor::make('name')
                    ->required(),
            ]);
    }
}
