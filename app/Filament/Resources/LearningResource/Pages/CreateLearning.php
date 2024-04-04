<?php

namespace App\Filament\Resources\LearningResource\Pages;

use App\Filament\Resources\LearningResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLearning extends CreateRecord
{
    protected static string $resource = LearningResource::class;
}
