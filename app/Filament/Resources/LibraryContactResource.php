<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LibraryContactResource\Pages;
use App\Models\LibraryContact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;

class LibraryContactResource extends Resource
{
    protected static ?string $model = LibraryContact::class;

    protected static ?string $navigationIcon = 'heroicon-o-phone';

    protected static ?string $navigationGroup = 'Library Management';

    protected static ?string $label = 'Contact Settings';

    // Allow Admin, ICT, and Librarian to access
    public static function canViewAny(): bool
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
                Forms\Components\Section::make('Contact Information')
                    ->schema([
                        TextInput::make('whatsapp_number')
                            ->label('WhatsApp Number')
                            ->placeholder('e.g. +265 991 887 119')
                            ->helperText('The WhatsApp number for library contact.'),
                        
                        TextInput::make('email')
                            ->label('Email Address')
                            ->email()
                            ->placeholder('e.g. library@sjog.mw')
                            ->helperText('The email address for library contact.'),
                        
                        TextInput::make('phone_number')
                            ->label('Phone Number')
                            ->placeholder('e.g. +265 991 887 119')
                            ->helperText('The phone number for library contact.'),
                    ]),
                
                Forms\Components\Section::make('Header Content')
                    ->schema([
                        TextInput::make('title')
                            ->label('Section Title')
                            ->placeholder('e.g. Talk to the Librarian')
                            ->default('Talk to the Librarian'),
                        
                        Textarea::make('description')
                            ->label('Description')
                            ->rows(3)
                            ->placeholder('Need help finding resources or have a question? Our librarians are here to assist you.')
                            ->helperText('The description text shown below the title.'),
                        
                        Toggle::make('is_active')
                            ->label('Active')
                            ->helperText('Inactive contacts will not appear on the website.')
                            ->default(true),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Section Title'),
                
                TextColumn::make('whatsapp_number')
                    ->label('WhatsApp')
                    ->searchable(),
                
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                
                TextColumn::make('phone_number')
                    ->label('Phone')
                    ->searchable(),
                
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
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLibraryContacts::route('/'),
            'create' => Pages\CreateLibraryContact::route('/create'),
            'edit' => Pages\EditLibraryContact::route('/{record}/edit'),
        ];
    }
}