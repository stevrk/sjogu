<?php

namespace App\Filament\Resources\LibraryStaffResource\Pages;

use App\Filament\Resources\LibraryStaffResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLibraryStaff extends CreateRecord
{
    protected static string $resource = LibraryStaffResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}