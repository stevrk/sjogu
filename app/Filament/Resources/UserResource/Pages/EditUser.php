<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Hash;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('Delete User')
                ->icon('heroicon-o-trash'),
            
            Actions\Action::make('reset_password')
                ->label('Reset Password')
                ->icon('heroicon-o-key')
                ->color('warning')
                ->action(function ($record) {
                    $record->password = Hash::make('sjogu2026');
                    $record->save();
                    
                    Notification::make()
                        ->title('Password Reset')
                        ->body('Password has been reset to: sjogu2026')
                        ->success()
                        ->send();
                })
                ->requiresConfirmation()
                ->modalHeading('Reset Password')
                ->modalDescription('This will reset the user\'s password to: sjogu2026'),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}