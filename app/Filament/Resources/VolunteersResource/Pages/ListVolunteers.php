<?php

namespace App\Filament\Resources\VolunteersResource\Pages;

use App\Filament\Resources\VolunteersResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVolunteers extends ListRecords
{
    protected static string $resource = VolunteersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
