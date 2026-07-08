<?php

namespace App\Filament\Resources\LibraryItemResource\Pages;

use App\Filament\Resources\LibraryItemResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLibraryItem extends CreateRecord
{
    protected static string $resource = LibraryItemResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}