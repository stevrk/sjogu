<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LibraryStaffResource\Pages;
use App\Models\LibraryStaff;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;

class LibraryStaffResource extends Resource
{
    protected static ?string $model = LibraryStaff::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Library Management';

    // Allow Admin, ICT, and Librarian to access
    public static function canViewAny(): bool
    {
        $user = auth()->user();
        return $user && in_array($user->role, ['admin', 'general_ict', 'librarian']);
    }

    public static function canCreate(): bool
    {
        $user = auth()->user();
        return $user && in_array($user->role, ['admin', 'general_ict', 'librarian']);
    }

    public static function canEdit($record): bool
    {
        $user = auth()->user();
        return $user && in_array($user->role, ['admin', 'general_ict', 'librarian']);
    }

    public static function canDelete($record): bool
    {
        $user = auth()->user();
        return $user && in_array($user->role, ['admin', 'general_ict', 'librarian']);
    }

    public static function getNavigationGroup(): ?string
    {
        $user = auth()->user();
        return ($user && in_array($user->role, ['admin', 'general_ict', 'librarian'])) ? 'Library Management' : null;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Full Name')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Enter staff name'),
                
                TextInput::make('position')
                    ->label('Position')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('e.g. Head Librarian'),
                
                Textarea::make('description')
                    ->label('Description')
                    ->rows(3)
                    ->maxLength(500)
                    ->placeholder('Brief description of the staff member...')
                    ->helperText('Short description about the staff member.'),
                
                FileUpload::make('image')
                    ->label('Profile Picture')
                    ->image()
                    ->directory('library-staff')
                    ->visibility('public')
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                    ->maxSize(2048)
                    ->helperText('Upload a profile picture. Recommended size: 400x400px')
                    ->disablePreview()
                    ->removeUploadedFileButtonPosition('right')
                    ->uploadingMessage('Uploading...'),
                
                TextInput::make('email')
                    ->label('Email Address')
                    ->email()
                    ->maxLength(255)
                    ->placeholder('Enter email address'),
                
                TextInput::make('phone')
                    ->label('Phone Number')
                    ->tel()
                    ->maxLength(20)
                    ->placeholder('Enter phone number'),
                
                Toggle::make('is_active')
                    ->label('Active')
                    ->helperText('Inactive staff will not appear on the website.')
                    ->default(true),
                
                TextInput::make('order')
                    ->label('Display Order')
                    ->numeric()
                    ->default(0)
                    ->helperText('Lower numbers appear first.'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Image')
                    ->circular()
                    ->size(50)
                    ->defaultImageUrl(function ($record) {
                        if ($record->image) {
                            return asset('storage/' . $record->image);
                        }
                        return 'https://ui-avatars.com/api/?name=' . urlencode($record->name) . '&color=7F9CF5&background=EBF4FF';
                    }),
                
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),
                
                TextColumn::make('position')
                    ->label('Position')
                    ->searchable()
                    ->sortable(),
                
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                
                ToggleColumn::make('is_active')
                    ->label('Active')
                    ->onColor('success')
                    ->offColor('danger'),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active')
                    ->boolean()
                    ->trueLabel('Active')
                    ->falseLabel('Inactive')
                    ->placeholder('All'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('order', 'asc')
            ->defaultSort('name', 'asc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLibraryStaff::route('/'),
            'create' => Pages\CreateLibraryStaff::route('/create'),
            'edit' => Pages\EditLibraryStaff::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        $user = auth()->user();
        if (!$user || !in_array($user->role, ['admin', 'general_ict', 'librarian'])) {
            return null;
        }
        return (string) static::getModel()::where('is_active', true)->count();
    }
}