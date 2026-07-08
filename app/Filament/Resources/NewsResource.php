<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Grid;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\BadgeColumn;
use Illuminate\Support\Str;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationGroup = 'Content Management';

    // Allow Admin and ICT only - NOT Librarians or Admissions
    public static function canViewAny(): bool
    {
        $user = auth()->user();
        return $user && in_array($user->role, ['admin', 'general_ict']);
    }

    public static function canCreate(): bool
    {
        $user = auth()->user();
        return $user && in_array($user->role, ['admin', 'general_ict']);
    }

    public static function canEdit($record): bool
    {
        $user = auth()->user();
        return $user && in_array($user->role, ['admin', 'general_ict']);
    }

    public static function canDelete($record): bool
    {
        $user = auth()->user();
        return $user && in_array($user->role, ['admin', 'general_ict']);
    }

    public static function getNavigationGroup(): ?string
    {
        $user = auth()->user();
        return ($user && in_array($user->role, ['admin', 'general_ict'])) ? 'Content Management' : null;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('News Article')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('title')
                                    ->label('Title')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                                        if ($operation === 'create') {
                                            $set('slug', Str::slug($state));
                                        }
                                    }),
                                
                                TextInput::make('slug')
                                    ->label('Slug')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true)
                                    ->helperText('URL-friendly version of the title.'),
                            ]),
                        
                        TextInput::make('excerpt')
                            ->label('Excerpt')
                            ->maxLength(500)
                            ->columnSpanFull()
                            ->helperText('A short summary of the article.'),
                        
                        RichEditor::make('content')
                            ->label('Content')
                            ->required()
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'strike',
                                'h2',
                                'h3',
                                'bulletList',
                                'orderedList',
                                'blockquote',
                                'link',
                                'image',
                                'alignLeft',
                                'alignCenter',
                                'alignRight',
                            ]),
                    ]),
                
                Section::make('Media & Metadata')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                FileUpload::make('image')
                                    ->label('Featured Image')
                                    ->directory('news')
                                    ->visibility('public')
                                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/gif'])
                                    ->maxSize(5120)
                                    ->helperText('Upload a featured image for the news article.')
                                    ->removeUploadedFileButtonPosition('right')
                                    ->uploadingMessage('Uploading...')
                                    ->disablePreview()
                                    ->columnSpanFull(),
                                
                                Select::make('category')
                                    ->label('Category')
                                    ->options([
                                        'Academic' => 'Academic',
                                        'Campus Life' => 'Campus Life',
                                        'Announcement' => 'Announcement',
                                        'Events' => 'Events',
                                        'Research' => 'Research',
                                        'Alumni' => 'Alumni',
                                    ])
                                    ->required()
                                    ->searchable(),
                            ]),
                        
                        Grid::make(3)
                            ->schema([
                                DatePicker::make('date')
                                    ->label('Publish Date')
                                    ->required()
                                    ->default(now()),
                                
                                Select::make('category_color')
                                    ->label('Category Color')
                                    ->options([
                                        'red' => 'Red',
                                        'green' => 'Green',
                                        'blue' => 'Blue',
                                        'yellow' => 'Yellow',
                                        'purple' => 'Purple',
                                        'orange' => 'Orange',
                                    ])
                                    ->default('red')
                                    ->required(),
                                
                                Toggle::make('is_featured')
                                    ->label('Featured Article')
                                    ->helperText('Featured articles appear at the top of the news page.')
                                    ->default(false),
                            ]),
                        
                        Toggle::make('is_published')
                            ->label('Published')
                            ->helperText('Unpublish to hide from the website.')
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
                    ->limit(40),
                
                BadgeColumn::make('category')
                    ->label('Category')
                    ->colors([
                        'primary' => 'Academic',
                        'success' => 'Campus Life',
                        'warning' => 'Announcement',
                        'info' => 'Events',
                        'danger' => 'Research',
                        'secondary' => 'Alumni',
                    ]),
                
                TextColumn::make('date')
                    ->label('Date')
                    ->date('M d, Y')
                    ->sortable(),
                
                ToggleColumn::make('is_featured')
                    ->label('Featured')
                    ->onColor('success')
                    ->offColor('gray'),
                
                ToggleColumn::make('is_published')
                    ->label('Published')
                    ->onColor('success')
                    ->offColor('danger'),
                
                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('M d, Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->options([
                        'Academic' => 'Academic',
                        'Campus Life' => 'Campus Life',
                        'Announcement' => 'Announcement',
                        'Events' => 'Events',
                        'Research' => 'Research',
                        'Alumni' => 'Alumni',
                    ]),
                
                Tables\Filters\TernaryFilter::make('is_featured')
                    ->label('Featured'),
                
                Tables\Filters\TernaryFilter::make('is_published')
                    ->label('Published'),
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
            ->defaultSort('created_at', 'desc')
            ->searchable()
            ->paginated([10, 25, 50, 100]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        $user = auth()->user();
        if (!$user || !in_array($user->role, ['admin', 'general_ict'])) {
            return null;
        }
        return (string) static::getModel()::where('is_published', true)->count();
    }
}