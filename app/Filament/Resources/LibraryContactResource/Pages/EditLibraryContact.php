<?php

namespace App\Filament\Resources\LibraryContactResource\Pages;

use App\Filament\Resources\LibraryContactResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLibraryContact extends EditRecord
{
    protected static string $resource = LibraryContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
