<?php

namespace App\Filament\Resources\ProfileResource\Pages;

use App\Filament\Resources\ProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EditProfile extends EditRecord
{
    protected static string $resource = ProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('view')
                ->label('View Profile')
                ->icon('heroicon-o-eye')
                ->url(fn () => ProfileResource::getUrl('index'))
                ->color('gray'),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Remove password fields if they are empty
        if (empty($data['new_password'])) {
            unset($data['current_password']);
            unset($data['new_password']);
            unset($data['new_password_confirmation']);
        } else {
            // Hash the new password
            $data['password'] = Hash::make($data['new_password']);
            unset($data['current_password']);
            unset($data['new_password']);
            unset($data['new_password_confirmation']);
        }

        return $data;
    }

    protected function afterSave(): void
    {
        // If password was changed, logout and notify
        if (isset($this->data['password'])) {
            Notification::make()
                ->title('Password Changed Successfully')
                ->body('Your password has been updated. Please login again.')
                ->success()
                ->send();

            Auth::logout();
            session()->invalidate();
            session()->regenerateToken();
            
            redirect('/admin/login');
        } else {
            Notification::make()
                ->title('Profile Updated Successfully')
                ->body('Your profile information has been updated.')
                ->success()
                ->send();
        }
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}