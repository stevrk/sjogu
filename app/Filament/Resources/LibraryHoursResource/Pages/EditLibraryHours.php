<?php

namespace App\Filament\Resources\LibraryHoursResource\Pages;

use App\Filament\Resources\LibraryHoursResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLibraryHours extends EditRecord
{
    protected static string $resource = LibraryHoursResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
