<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImportantDateResource\Pages;
use App\Models\ImportantDate;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\BadgeColumn;

class ImportantDateResource extends Resource
{
    protected static ?string $model = ImportantDate::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    protected static ?string $navigationGroup = 'Content Management';

    // Only allow Admin, General ICT, and Admissions to access
    public static function canViewAny(): bool
    {
        $user = auth()->user();
        return $user && in_array($user->role, ['admin', 'general_ict', 'admission']);
    }

    public static function canCreate(): bool
    {
        $user = auth()->user();
        return $user && in_array($user->role, ['admin', 'general_ict', 'admission']);
    }

    public static function canEdit($record): bool
    {
        $user = auth()->user();
        return $user && in_array($user->role, ['admin', 'general_ict', 'admission']);
    }

    public static function canDelete($record): bool
    {
        $user = auth()->user();
        return $user && in_array($user->role, ['admin', 'general_ict', 'admission']);
    }

    public static function getNavigationGroup(): ?string
    {
        $user = auth()->user();
        return ($user && in_array($user->role, ['admin', 'general_ict', 'admission'])) ? 'Content Management' : null;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Basic Information')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('title')
                                    ->label('Title')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('e.g. Registration Deadline')
                                    ->helperText('A short title for the important date.'),
                                
                                TextInput::make('order')
                                    ->label('Display Order')
                                    ->numeric()
                                    ->default(0)
                                    ->helperText('Lower numbers appear first.'),
                            ]),
                    ]),
                
                Section::make('Display Settings (When to show on website)')
                    ->description('Set the date range when this item should be visible on the website.')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                DatePicker::make('display_start_date')
                                    ->label('Display Start Date')
                                    ->required()
                                    ->placeholder('When to start showing')
                                    ->helperText('The date when this should start appearing on the website.'),
                                
                                DatePicker::make('display_end_date')
                                    ->label('Display End Date')
                                    ->nullable()
                                    ->placeholder('When to stop showing')
                                    ->helperText('The date when this should stop appearing on the website. Leave blank to show indefinitely.'),
                            ]),
                    ]),
                
                Section::make('Event Details')
                    ->description('Set the actual date(s) of the event.')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                DatePicker::make('event_start_date')
                                    ->label('Event Start Date')
                                    ->nullable()
                                    ->placeholder('Event start date')
                                    ->helperText('The actual start date of the event. If not set, uses Display Start Date.'),
                                
                                DatePicker::make('event_end_date')
                                    ->label('Event End Date')
                                    ->nullable()
                                    ->placeholder('Event end date')
                                    ->helperText('The actual end date of the event. Leave blank for single-day event.'),
                            ]),
                    ]),
                
                Section::make('Description')
                    ->schema([
                        Textarea::make('description')
                            ->label('Short Description')
                            ->maxLength(500)
                            ->rows(2)
                            ->placeholder('Brief description/reminder (max 500 characters)')
                            ->helperText('This will appear when users click on the date. Keep it short!')
                            ->columnSpanFull(),
                    ]),
                
                Section::make('Status')
                    ->schema([
                        Toggle::make('is_active')
                            ->label('Active')
                            ->helperText('Inactive dates will not appear on the website.')
                            ->default(true),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable()
                    ->limit(30),
                
                TextColumn::make('display_date')
                    ->label('Display Period')
                    ->sortable(query: function ($query, $direction) {
                        return $query->orderBy('display_start_date', $direction);
                    }),
                
                TextColumn::make('event_date')
                    ->label('Event Date')
                    ->sortable(query: function ($query, $direction) {
                        return $query->orderBy('event_start_date', $direction);
                    }),
                
                TextColumn::make('description')
                    ->label('Description')
                    ->limit(30)
                    ->toggleable(isToggledHiddenByDefault: true),
                
                BadgeColumn::make('is_currently_visible')
                    ->label('Visible Now')
                    ->formatStateUsing(fn ($state) => $state ? '✅ Visible' : '⏳ Hidden')
                    ->colors([
                        'success' => true,
                        'danger' => false,
                    ])
                    ->sortable(),
                
                ToggleColumn::make('is_active')
                    ->label('Enabled')
                    ->onColor('success')
                    ->offColor('danger'),
                
                TextColumn::make('order')
                    ->label('Order')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Enabled')
                    ->boolean()
                    ->trueLabel('Enabled')
                    ->falseLabel('Disabled')
                    ->placeholder('All'),
                
                Tables\Filters\TernaryFilter::make('is_currently_visible')
                    ->label('Visible Now')
                    ->boolean()
                    ->trueLabel('Visible')
                    ->falseLabel('Hidden')
                    ->placeholder('All'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Edit')
                    ->icon('heroicon-o-pencil-square'),
                
                Tables\Actions\DeleteAction::make()
                    ->label('Delete')
                    ->icon('heroicon-o-trash')
                    ->requiresConfirmation(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('order', 'asc')
            ->defaultSort('display_start_date', 'asc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListImportantDates::route('/'),
            'create' => Pages\CreateImportantDate::route('/create'),
            'edit' => Pages\EditImportantDate::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        $user = auth()->user();
        if (!$user || !in_array($user->role, ['admin', 'general_ict', 'admission'])) {
            return null;
        }
        
        $count = static::getModel()::where('is_active', true)
            ->where('display_start_date', '<=', now())
            ->where(function ($query) {
                $query->whereNull('display_end_date')
                      ->orWhere('display_end_date', '>=', now());
            })
            ->count();
        
        return $count > 0 ? (string) $count : null;
    }
}