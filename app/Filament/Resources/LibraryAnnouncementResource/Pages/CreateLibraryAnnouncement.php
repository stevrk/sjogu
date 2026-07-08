<?php

namespace App\Filament\Resources\LibraryAnnouncementResource\Pages;

use App\Filament\Resources\LibraryAnnouncementResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLibraryAnnouncement extends CreateRecord
{
    protected static string $resource = LibraryAnnouncementResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}