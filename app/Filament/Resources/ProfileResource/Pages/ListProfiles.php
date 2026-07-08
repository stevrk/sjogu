<?php

namespace App\Filament\Resources\ProfileResource\Pages;

use App\Filament\Resources\ProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProfiles extends ListRecords
{
    protected static string $resource = ProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make()
                ->label('Edit Profile')
                ->url(fn () => ProfileResource::getUrl('edit', ['record' => auth()->id()]))
                ->icon('heroicon-o-pencil-square'),
        ];
    }
}