<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramResource\Pages;
use App\Models\Program;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Grid;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\BadgeColumn;

class ProgramResource extends Resource
{
    protected static ?string $model = Program::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationGroup = 'Content Management';

    protected static ?int $navigationSort = 3;

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
        return ($user && in_array($user->role, ['admin', 'general_ict', 'librarian'])) ? 'Content Management' : null;
    }

    public static function form(Form $form): Form
{
    return $form
        ->schema([
            // Section 1: Basic Information
            Grid::make(2)
                ->schema([
                    TextInput::make('name')
                        ->label('Program Name')
                        ->required()
                        ->maxLength(255)
                        ->placeholder('e.g. Diploma in Clinical Medicine')
                        ->helperText('Enter the full program name.'),

                    Select::make('department_name')
                        ->label('Department')
                        ->required()
                        ->options(fn () => \App\Models\Department::pluck('name', 'name')->toArray())
                        ->searchable()
                        ->helperText('Select the department this program belongs to.')
                        ->placeholder('Select a department'),
                ]),

            Grid::make(2)
                ->schema([
                    TextInput::make('duration')
                        ->label('Duration')
                        ->placeholder('e.g. 3 Years')
                        ->helperText('e.g. 3 Years, 4 Years'),

                    Select::make('study_mode')
                        ->label('Study Mode')
                        ->options([
                            'Full-time' => 'Full-time',
                            'Part-time' => 'Part-time',
                            'Distance Learning' => 'Distance Learning',
                            'Blended' => 'Blended',
                        ])
                        ->placeholder('Select study mode'),
                ]),

            Grid::make(2)
                ->schema([
                    Select::make('program_type')
                        ->label('Program Type')
                        ->required()
                        ->options([
                            'generic' => 'Generic',
                            'upgrading' => 'Upgrading',
                        ])
                        ->default('generic')
                        ->helperText('Select whether this is a Generic or Upgrading program.'),

                    Toggle::make('is_active')
                        ->label('Active')
                        ->helperText('Inactive programs will not appear on the website.')
                        ->default(true),
                ]),

            // Section 2: Description
            Textarea::make('description')
                ->label('Description')
                ->rows(4)
                ->maxLength(1000)
                ->placeholder('Enter a detailed description of the program...')
                ->helperText('A comprehensive overview of the program.')
                ->columnSpanFull(),

            // Section 3: Picture
            FileUpload::make('picture')
                ->label('Program Picture')
                ->image()
                ->directory('programs')
                ->visibility('public')
                ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/gif'])
                ->maxSize(5120)
                ->helperText('Upload a program image. Recommended size: 800x500px')
                ->disablePreview()
                ->removeUploadedFileButtonPosition('right')
                ->uploadingMessage('Uploading...')
                ->columnSpanFull(),

            // Section 4: Career Opportunities (Optional)
            Repeater::make('career_opportunities')
                ->label('Career Opportunities')
                ->schema([
                    TextInput::make('item')
                        ->label('Career Opportunity')
                        ->required()
                        ->placeholder('e.g. Clinical Officer in public/private hospitals'),
                ])
                ->defaultItems(0)  // No default items
                ->maxItems(10)
                ->columnSpanFull()
                ->helperText('List career opportunities for graduates. (Optional)')
                ->reorderableWithButtons()
                ->addActionLabel('Add Career Opportunity')
                ->nullable(),

            // Section 5: Entry Requirements (Optional)
            Repeater::make('entry_requirements')
                ->label('Entry Requirements')
                ->schema([
                    TextInput::make('item')
                        ->label('Requirement')
                        ->required()
                        ->placeholder('e.g. MSCE with 6 credits including English, Maths, Biology'),
                ])
                ->defaultItems(0)  // No default items
                ->maxItems(10)
                ->columnSpanFull()
                ->helperText('List the entry requirements for this program. (Optional)')
                ->reorderableWithButtons()
                ->addActionLabel('Add Entry Requirement')
                ->nullable(),

            // Section 6: Order
            TextInput::make('order')
                ->label('Display Order')
                ->numeric()
                ->default(0)
                ->helperText('Lower numbers appear first.')
                ->columnSpanFull(),
        ]);
}

  public static function table(Table $table): Table
{
    return $table
        ->columns([
            // REMOVED: ImageColumn::make('picture')

            TextColumn::make('name')
                ->label('Program Name')
                ->searchable()
                ->sortable()
                ->limit(35),

            TextColumn::make('department_name')
                ->label('Department')
                ->searchable()
                ->sortable()
                ->limit(20),

            BadgeColumn::make('program_type')
                ->label('Type')
                ->formatStateUsing(fn ($state) => $state === 'generic' ? 'Generic' : 'Upgrading')
                ->colors([
                    'success' => 'generic',
                    'warning' => 'upgrading',
                ])
                ->badge(),

            TextColumn::make('duration')
                ->label('Duration')
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: false),

            ToggleColumn::make('is_active')
                ->label('Active')
                ->onColor('success')
                ->offColor('danger'),

            TextColumn::make('order')
                ->label('Order')
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),

            TextColumn::make('created_at')
                ->label('Created')
                ->date('M d, Y')
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ])
        ->filters([
            Tables\Filters\SelectFilter::make('department_name')
                ->label('Department')
                ->options(fn () => \App\Models\Program::distinct()->pluck('department_name', 'department_name')->toArray())
                ->searchable(),

            Tables\Filters\SelectFilter::make('program_type')
                ->options([
                    'generic' => 'Generic',
                    'upgrading' => 'Upgrading',
                ]),

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
                ->requiresConfirmation()
                ->modalDescription('Deleting this program will remove it from the website.'),
        ])
        ->bulkActions([
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
            ]),
        ])
        ->defaultSort('order', 'asc')
        ->defaultSort('name', 'asc')
        ->searchable()
        ->paginated([10, 25, 50, 100]);
}

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPrograms::route('/'),
            'create' => Pages\CreateProgram::route('/create'),
            'edit' => Pages\EditProgram::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        $user = auth()->user();
        if (!$user || !in_array($user->role, ['admin', 'general_ict', 'librarian'])) {
            return null;
        }

        $count = static::getModel()::where('is_active', true)->count();
        return $count > 0 ? (string) $count : null;
    }
}