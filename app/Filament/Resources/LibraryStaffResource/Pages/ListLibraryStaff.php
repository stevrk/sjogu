<?php

namespace App\Filament\Resources\LibraryStaffResource\Pages;

use App\Filament\Resources\LibraryStaffResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLibraryStaff extends ListRecords
{
    protected static string $resource = LibraryStaffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Add Staff Member')
                ->icon('heroicon-o-plus-circle'),
        ];
    }
}