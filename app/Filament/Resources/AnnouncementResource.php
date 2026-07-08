<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnnouncementResource\Pages;
use App\Models\Announcement;
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


class AnnouncementResource extends Resource
{
    protected static ?string $model = Announcement::class;

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';

    protected static ?string $navigationGroup = 'Content Management';

    // Allow Admin, ICT, and Admissions to access
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
            TextInput::make('title')
                ->label('Title')
                ->required()
                ->maxLength(51)
                ->minLength(3)
                ->placeholder('Enter announcement title')
                ->helperText('Maximum 50 characters allowed.')
                ->rules([
                    'required',
                    'string',
                    'min:3',
                    'max:51',
                ])
                ->validationAttribute('Title')
                ->validationMessages([
                    'max' => 'The title cannot exceed 50 characters.',
                ])
                ->hint(function ($state) {
                    $count = strlen($state ?? '');
                    $remaining = 50 - $count;
                    if ($count > 50) {
                        return '⚠️ Exceeds limit by ' . ($count - 50) . ' characters';
                    }
                    return $count . '/50 characters';
                })
                ->hintColor(function ($state) {
                    $count = strlen($state ?? '');
                    if ($count > 50) {
                        return 'danger';
                    } elseif ($count > 40) {
                        return 'warning';
                    }
                    return 'success';
                }),
            
            Textarea::make('description')
                ->label('Description')
                ->maxLength(500)
                ->rows(2)
                ->placeholder('Brief description of the announcement')
                ->columnSpanFull(),
            
            Toggle::make('is_active')
                ->label('Active')
                ->helperText('Inactive announcements will not appear on the website.')
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
                TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable()
                    ->limit(40),
                
                TextColumn::make('description')
                    ->label('Description')
                    ->limit(30)
                    ->toggleable(isToggledHiddenByDefault: false),
                
                ToggleColumn::make('is_active')
                    ->label('Active')
                    ->onColor('success')
                    ->offColor('danger'),
                
                TextColumn::make('order')
                    ->label('Order')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAnnouncements::route('/'),
            'create' => Pages\CreateAnnouncement::route('/create'),
            'edit' => Pages\EditAnnouncement::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        $user = auth()->user();
        if (!$user || !in_array($user->role, ['admin', 'general_ict', 'admission'])) {
            return null;
        }
        
        $count = static::getModel()::where('is_active', true)->count();
        return $count > 0 ? (string) $count : null;
    }
}