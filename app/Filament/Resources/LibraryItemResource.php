<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LibraryItemResource\Pages;
use App\Models\LibraryResource; // Keep the model as LibraryResource
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

class LibraryItemResource extends Resource
{
    protected static ?string $model = LibraryResource::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-chart-bar';

    protected static ?string $navigationGroup = 'Library Management';

    protected static ?string $label = 'Resource Item';
    protected static ?string $pluralLabel = 'Library Resources';

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
                TextInput::make('title')
                    ->label('Resource Title')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('e.g. Print Books'),
                
                TextInput::make('count')
                    ->label('Count / Number')
                    ->maxLength(255)
                    ->placeholder('e.g. 20,000+'),
                
                Textarea::make('description')
                    ->label('Description')
                    ->rows(2)
                    ->maxLength(500)
                    ->placeholder('Brief description of the resource'),
                
                Toggle::make('is_active')
                    ->label('Active')
                    ->helperText('Inactive resources will not appear on the website.')
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
                    ->label('Resource')
                    ->searchable()
                    ->sortable(),
                
                TextColumn::make('count')
                    ->label('Count')
                    ->searchable(),
                
                TextColumn::make('description')
                    ->label('Description')
                    ->limit(30)
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
            ->defaultSort('order', 'asc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLibraryItems::route('/'),
            'create' => Pages\CreateLibraryItem::route('/create'),
            'edit' => Pages\EditLibraryItem::route('/{record}/edit'),
        ];
    }
}