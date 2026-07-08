<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LibraryEnquiryResource\Pages;
use App\Models\LibraryEnquiry;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Actions\Action as TableAction;
use Filament\Notifications\Notification;

class LibraryEnquiryResource extends Resource
{
    protected static ?string $model = LibraryEnquiry::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox';

    protected static ?string $navigationGroup = 'Library Management';

    protected static ?string $label = 'Enquiries';

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

    public static function getNavigationBadge(): ?string
    {
        $count = static::getModel()::where('status', 'unread')->count();
        return $count > 0 ? (string) $count : null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'danger';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Enquiry Details')
                    ->schema([
                        TextInput::make('name')
                            ->label('Name')
                            ->disabled(),
                        
                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->disabled(),
                        
                        TextInput::make('inquiry_type')
                            ->label('Inquiry Type')
                            ->disabled(),
                        
                        Textarea::make('message')
                            ->label('Message')
                            ->rows(4)
                            ->disabled(),
                    ]),
                
                Forms\Components\Section::make('Admin Response')
                    ->schema([
                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'unread' => 'Unread',
                                'read' => 'Read',
                                'replied' => 'Replied',
                            ])
                            ->required(),
                        
                        Textarea::make('admin_notes')
                            ->label('Admin Notes')
                            ->rows(3)
                            ->placeholder('Add notes about the enquiry or response...'),
                    ]),
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
                
                TextColumn::make('inquiry_type')
                    ->label('Type')
                    ->searchable()
                    ->formatStateUsing(fn ($state) => ucfirst($state ?? 'Other')),
                
                BadgeColumn::make('status')
                    ->label('Status')
                    ->formatStateUsing(fn ($state) => match($state) {
                        'unread' => '🔴 Unread',
                        'read' => '🟡 Read',
                        'replied' => '🟢 Replied',
                        default => ucfirst($state),
                    })
                    ->colors([
                        'danger' => 'unread',
                        'warning' => 'read',
                        'success' => 'replied',
                    ])
                    ->badge(),
                
                TextColumn::make('created_at')
                    ->label('Received')
                    ->dateTime('M d, Y H:i')
                    ->sortable(),
                
                TextColumn::make('read_at')
                    ->label('Read At')
                    ->dateTime('M d, Y H:i')
                    ->toggleable(isToggledHiddenByDefault: true),
                
                TextColumn::make('replied_at')
                    ->label('Replied At')
                    ->dateTime('M d, Y H:i')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'unread' => 'Unread',
                        'read' => 'Read',
                        'replied' => 'Replied',
                    ]),
                
                Tables\Filters\SelectFilter::make('inquiry_type')
                    ->options([
                        'research' => 'Research Assistance',
                        'resources' => 'Resource Request',
                        'announcement' => 'Library Announcement',
                        'other' => 'Other',
                    ]),
            ])
            ->actions([
                TableAction::make('view')
                    ->label('View')
                    ->icon('heroicon-o-eye')
                    ->action(function ($record) {
                        $record->markAsRead();
                        return redirect()->route('filament.admin.resources.library-enquiries.edit', $record);
                    }),
                
                TableAction::make('mark_read')
                    ->label('Mark as Read')
                    ->icon('heroicon-o-check-circle')
                    ->color('warning')
                    ->action(function ($record) {
                        $record->markAsRead();
                        Notification::make()
                            ->title('Marked as Read')
                            ->success()
                            ->send();
                    })
                    ->visible(fn ($record) => $record->status === 'unread'),
                
                TableAction::make('mark_replied')
                    ->label('Mark as Replied')
                    ->icon('heroicon-o-reply')
                    ->color('success')
                    ->action(function ($record) {
                        $record->markAsReplied();
                        Notification::make()
                            ->title('Marked as Replied')
                            ->success()
                            ->send();
                    })
                    ->visible(fn ($record) => $record->status !== 'replied'),
                
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
                    Tables\Actions\BulkAction::make('mark_read')
                        ->label('Mark as Read')
                        ->icon('heroicon-o-check-circle')
                        ->action(fn ($records) => $records->each->markAsRead()),
                    
                    Tables\Actions\BulkAction::make('mark_replied')
                        ->label('Mark as Replied')
                        ->icon('heroicon-o-reply')
                        ->action(fn ($records) => $records->each->markAsReplied()),
                    
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc')
            ->searchable()
            ->paginated([10, 25, 50, 100]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLibraryEnquiries::route('/'),
            'create' => Pages\CreateLibraryEnquiry::route('/create'),
            'edit' => Pages\EditLibraryEnquiry::route('/{record}/edit'),
        ];
    }
}