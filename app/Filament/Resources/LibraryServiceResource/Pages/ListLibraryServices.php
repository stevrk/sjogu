<?php

namespace App\Filament\Resources\LibraryServiceResource\Pages;

use App\Filament\Resources\LibraryServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLibraryServices extends ListRecords
{
    protected static string $resource = LibraryServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
