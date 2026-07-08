<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LibraryHoursResource\Pages;
use App\Models\LibraryHours;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;

class LibraryHoursResource extends Resource
{
    protected static ?string $model = LibraryHours::class;

    protected static ?string $navigationIcon = 'heroicon-o-clock';

    protected static ?string $navigationGroup = 'Library Management';

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
                TextInput::make('day')
                    ->label('Day')
                    ->required()
                    ->maxLength(255)
                    ->disabled()
                    ->helperText('Day of the week (e.g. Monday - Thursday)'),
                
                TextInput::make('open_time')
                    ->label('Open Time')
                    ->placeholder('e.g. 8:00 AM')
                    ->helperText('Leave empty if closed or using custom text'),
                
                TextInput::make('close_time')
                    ->label('Close Time')
                    ->placeholder('e.g. 10:00 PM')
                    ->helperText('Leave empty if closed or using custom text'),
                
                TextInput::make('display_text')
                    ->label('Custom Display Text')
                    ->placeholder('e.g. Extended Hours')
                    ->helperText('Use this to override the time display (e.g. "Extended Hours", "By Appointment")'),
                
                Toggle::make('is_closed')
                    ->label('Closed')
                    ->helperText('Check if the library is closed on this day'),
                
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
                TextColumn::make('day')
                    ->label('Day')
                    ->searchable()
                    ->sortable(),
                
                TextColumn::make('full_hours')
                    ->label('Hours')
                    ->searchable(),
                
                ToggleColumn::make('is_closed')
                    ->label('Closed')
                    ->onColor('danger')
                    ->offColor('success'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([])
            ->defaultSort('order', 'asc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLibraryHours::route('/'),
            'create' => Pages\CreateLibraryHours::route('/create'),
            'edit' => Pages\EditLibraryHours::route('/{record}/edit'),
        ];
    }
}