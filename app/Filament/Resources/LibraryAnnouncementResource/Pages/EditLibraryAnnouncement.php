<?php

namespace App\Filament\Resources\LibraryAnnouncementResource\Pages;

use App\Filament\Resources\LibraryAnnouncementResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLibraryAnnouncement extends EditRecord
{
    protected static string $resource = LibraryAnnouncementResource::class;

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