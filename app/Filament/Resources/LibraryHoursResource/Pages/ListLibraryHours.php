<?php

namespace App\Filament\Resources\LibraryHoursResource\Pages;

use App\Filament\Resources\LibraryHoursResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLibraryHours extends ListRecords
{
    protected static string $resource = LibraryHoursResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
