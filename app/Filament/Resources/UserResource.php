<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\BadgeColumn;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    // REMOVE OR COMMENT OUT THIS LINE:
    // protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationIcon = null;

    protected static ?string $navigationGroup = 'Users & Roles';

    // ONLY ADMIN can access this resource
    public static function canViewAny(): bool
    {
        $user = auth()->user();
        return $user && $user->role === 'admin';
    }

    public static function canCreate(): bool
    {
        $user = auth()->user();
        return $user && $user->role === 'admin';
    }

    public static function canEdit($record): bool
    {
        $user = auth()->user();
        return $user && $user->role === 'admin';
    }

    public static function canDelete($record): bool
    {
        $user = auth()->user();
        return $user && $user->role === 'admin';
    }

    public static function getNavigationGroup(): ?string
    {
        $user = auth()->user();
        return ($user && $user->role === 'admin') ? 'Users & Roles' : null;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Full Name')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Enter full name'),
                
                TextInput::make('email')
                    ->label('Email Address')
                    ->required()
                    ->email()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->placeholder('Enter email address')
                    ->helperText('The user will receive login credentials via email.'),
                
                Select::make('role')
                    ->label('Role')
                    ->options([
                        'admin' => '👑 Administrator (Full Access)',
                        'general_ict' => '💻 ICT Team (Content Management)',
                        'admission' => '📝 Admissions Office (Applications)',
                        'librarian' => '📚 Librarian (Library Management)',
                    ])
                    ->required()
                    ->searchable()
                    ->helperText('Select the user\'s role and permissions.'),
                
                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true)
                    ->helperText('Inactive users cannot access the admin panel.'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),
                
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),
                
                BadgeColumn::make('role')
                    ->label('Role')
                    ->formatStateUsing(fn ($state) => match($state) {
                        'admin' => '👑 Administrator',
                        'general_ict' => '💻 ICT Team',
                        'admission' => '📝 Admissions Office',
                        'librarian' => '📚 Librarian',
                        default => ucfirst(str_replace('_', ' ', $state)),
                    })
                    ->colors([
                        'danger' => 'admin',
                        'info' => 'general_ict',
                        'success' => 'admission',
                        'warning' => 'librarian',
                    ])
                    ->badge(),
                
                ToggleColumn::make('is_active')
                    ->label('Active')
                    ->onColor('success')
                    ->offColor('danger'),
                
                TextColumn::make('created_at')
                    ->label('Created')
                    ->date('M d, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('role')
                    ->options([
                        'admin' => 'Administrator',
                        'general_ict' => 'ICT Team',
                        'admission' => 'Admissions Office',
                        'librarian' => 'Librarian',
                    ]),
                
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active Users')
                    ->boolean()
                    ->trueLabel('Active Users')
                    ->falseLabel('Inactive Users')
                    ->placeholder('All Users'),
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
                    Tables\Actions\DeleteBulkAction::make()
                        ->label('Delete Selected'),
                ]),
            ])
            ->defaultSort('created_at', 'desc')
            ->searchable()
            ->paginated([10, 25, 50, 100]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        $user = auth()->user();
        if (!$user || $user->role !== 'admin') {
            return null;
        }
        return (string) static::getModel()::count();
    }
}