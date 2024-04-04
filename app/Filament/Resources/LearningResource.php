<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LearningResource\Pages;
use App\Models\Learning;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class LearningResource extends Resource
{
    protected static ?string $model = Learning::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()

                    ->schema([
                        TextInput::make('mapel')->required(),
                        FileUpload::make('image')->image()->required(),
                    ])
                    ->columns(2),

                Card::make()
                    ->schema([
                        RichEditor::make('description'),
                    ])
                    ->columns(1),
            ]);

            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('mapel')->sortable()->searchable(),
                ImageColumn::make('image'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListLearnings::route('/'),
            'create' => Pages\CreateLearning::route('/create'),
            'edit' => Pages\EditLearning::route('/{record}/edit'),
        ];
    }
}
