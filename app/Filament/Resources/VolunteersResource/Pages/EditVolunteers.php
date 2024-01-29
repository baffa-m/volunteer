<?php

namespace App\Filament\Resources\VolunteersResource\Pages;

use App\Filament\Resources\VolunteersResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVolunteers extends EditRecord
{
    protected static string $resource = VolunteersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
