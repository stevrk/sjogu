<?php

namespace App\Filament\Resources\LibraryAnnouncementResource\Pages;

use App\Filament\Resources\LibraryAnnouncementResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLibraryAnnouncements extends ListRecords
{
    protected static string $resource = LibraryAnnouncementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Add Announcement')
                ->icon('heroicon-o-plus-circle'),
        ];
    }
}