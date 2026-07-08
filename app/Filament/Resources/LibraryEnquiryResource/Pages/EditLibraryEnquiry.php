<?php

namespace App\Filament\Resources\LibraryEnquiryResource\Pages;

use App\Filament\Resources\LibraryEnquiryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLibraryEnquiry extends EditRecord
{
    protected static string $resource = LibraryEnquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
