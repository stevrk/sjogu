<?php

namespace App\Filament\Resources\LibraryEnquiryResource\Pages;

use App\Filament\Resources\LibraryEnquiryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLibraryEnquiries extends ListRecords
{
    protected static string $resource = LibraryEnquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
