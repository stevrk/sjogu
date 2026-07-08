<?php

namespace App\Filament\Resources\LibraryStaffResource\Pages;

use App\Filament\Resources\LibraryStaffResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLibraryStaff extends EditRecord
{
    protected static string $resource = LibraryStaffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}