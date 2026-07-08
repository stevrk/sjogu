<?php

namespace App\Filament\Resources\LibraryServiceResource\Pages;

use App\Filament\Resources\LibraryServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLibraryService extends EditRecord
{
    protected static string $resource = LibraryServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
