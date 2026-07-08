<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileResource\Pages;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Grid;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Hash;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class ProfileResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static ?string $navigationGroup = 'Profile';
    protected static ?string $label = 'My Profile';
    protected static ?string $pluralLabel = 'My Profile';
    protected static ?string $slug = 'profile';
    protected static ?int $navigationSort = 999;

    // Only show the current user's profile
    public static function canViewAny(): bool
    {
        return auth()->check();
    }

    // Only allow users to view their own profile
    public static function canView($record): bool
    {
        return auth()->id() === $record->id;
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canDelete($record): bool
    {
        return false;
    }

    // Override the navigation badge to show only one record
    public static function getNavigationBadge(): ?string
    {
        return null;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Personal Information')
                    ->description('Update your personal details')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('name')
                                    ->label('Full Name')
                                    ->required()
                                    ->maxLength(255),
                                
                                TextInput::make('email')
                                    ->label('Email Address')
                                    ->email()
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true),
                            ]),
                    ]),

                Section::make('Change Password')
                    ->description('Update your password')
                    ->schema([
                        TextInput::make('current_password')
                            ->label('Current Password')
                            ->password()
                            ->rule('current_password')
                            ->required()
                            ->placeholder('Enter your current password'),
                        
                        TextInput::make('new_password')
                            ->label('New Password')
                            ->password()
                            ->minLength(8)
                            ->same('new_password_confirmation')
                            ->helperText('Password must be at least 8 characters.')
                            ->placeholder('Enter new password'),
                        
                        TextInput::make('new_password_confirmation')
                            ->label('Confirm New Password')
                            ->password()
                            ->same('new_password')
                            ->placeholder('Confirm your new password'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable(),
                
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                
                TextColumn::make('created_at')
                    ->label('Member Since')
                    ->date('M d, Y'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Edit Profile')
                    ->icon('heroicon-o-pencil-square'),
            ])
            ->bulkActions([
                //
            ]);
    }

    // Override to show only the logged-in user's profile
    public static function getEloquentQuery(): \Illuminate\Database\Eloquent\Builder
    {
        return parent::getEloquentQuery()->where('id', auth()->id());
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfiles::route('/'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}