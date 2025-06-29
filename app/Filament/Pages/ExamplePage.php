<?php

namespace App\Filament\Pages;

use Filament\Actions\Action;
use Filament\Forms\Components\CodeEditor;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Page;
use Filament\Schemas\Schema;

class ExamplePage extends Page
{
    protected string $view = 'filament.pages.settings';

    public function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')
                ->hintActions([
                    Action::make('sample_action')
                        ->schema([
                            CodeEditor::make('some_code')
                        ])
                ]),
        ]);
    }
}
