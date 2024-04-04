<?php

namespace App\Filament\Resources\LearningResource\Pages;

use App\Filament\Resources\LearningResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLearning extends EditRecord
{
    protected static string $resource = LearningResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
