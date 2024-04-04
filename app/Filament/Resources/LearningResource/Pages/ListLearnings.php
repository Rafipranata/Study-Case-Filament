<?php

namespace App\Filament\Resources\LearningResource\Pages;

use App\Filament\Resources\LearningResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLearnings extends ListRecords
{
    protected static string $resource = LearningResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
