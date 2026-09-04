<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SolutionResource\Pages;
use App\Models\Solution;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Support\Str;

class SolutionResource extends Resource
{
    protected static ?string $model = Solution::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('Solution Configuration')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('Hero & General')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required()
                                    ->reactive()
                                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                                Forms\Components\TextInput::make('slug')->required()->unique(ignoreRecord: true),
                                Forms\Components\Textarea::make('description')
                                    ->label('Short Description')
                                    ->rows(3)
                                    ->columnSpan('full'),
                                Forms\Components\FileUpload::make('image_path')
                                    ->label('Hero Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('solutions'),
                                Forms\Components\Repeater::make('statistics')
                                    ->label('Hero Statistics (Checklist)')
                                    ->schema([
                                        Forms\Components\TextInput::make('stat')
                                            ->placeholder('e.g., ✓ Cloud Based')
                                            ->required(),
                                    ])
                                    ->createItemButtonLabel('Add Statistic')
                                    ->columnSpan('full'),
                            ]),

                        Forms\Components\Tabs\Tab::make('Overview & Challenges')
                            ->schema([
                                Forms\Components\RichEditor::make('overview')
                                    ->label('What is this Solution?')
                                    ->columnSpan('full'),
                                Forms\Components\Repeater::make('challenges')
                                    ->label('Common Business Challenges')
                                    ->schema([
                                        Forms\Components\TextInput::make('title')->required(),
                                        Forms\Components\Textarea::make('description')->rows(2)->required(),
                                    ])
                                    ->createItemButtonLabel('Add Challenge')
                                    ->columnSpan('full'),
                            ]),

                        Forms\Components\Tabs\Tab::make('Features & Benefits')
                            ->schema([
                                Forms\Components\Repeater::make('features')
                                    ->label('Powerful Features')
                                    ->schema([
                                        Forms\Components\TextInput::make('icon')
                                            ->placeholder('e.g., heroicon-o-cpu')
                                            ->default('heroicon-o-cube'),
                                        Forms\Components\TextInput::make('title')->required(),
                                        Forms\Components\Textarea::make('description')->rows(2)->required(),
                                    ])
                                    ->createItemButtonLabel('Add Feature')
                                    ->columnSpan('full'),
                                Forms\Components\Repeater::make('benefits')
                                    ->label('Why Choose PSuite ERP? (Benefits)')
                                    ->schema([
                                        Forms\Components\TextInput::make('icon')
                                            ->placeholder('e.g., heroicon-o-trending-up')
                                            ->default('heroicon-o-check-circle'),
                                        Forms\Components\TextInput::make('title')->required(),
                                        Forms\Components\Textarea::make('description')->rows(2)->required(),
                                    ])
                                    ->createItemButtonLabel('Add Benefit')
                                    ->columnSpan('full'),
                            ]),

                        Forms\Components\Tabs\Tab::make('How It Works & Gallery')
                            ->schema([
                                Forms\Components\Repeater::make('how_it_works')
                                    ->label('How it Works (Timeline)')
                                    ->schema([
                                        Forms\Components\TextInput::make('step_number')
                                            ->placeholder('e.g., Step 01')
                                            ->required(),
                                        Forms\Components\TextInput::make('title')->required(),
                                        Forms\Components\Textarea::make('description')->rows(2)->required(),
                                    ])
                                    ->createItemButtonLabel('Add Step')
                                    ->columnSpan('full'),
                                Forms\Components\FileUpload::make('gallery')
                                    ->label('Solution Screenshots / Gallery')
                                    ->multiple()
                                    ->image()
                                    ->disk('public')
                                    ->directory('solutions/gallery')
                                    ->columnSpan('full'),
                            ]),

                        Forms\Components\Tabs\Tab::make('Industries & FAQ')
                            ->schema([
                                Forms\Components\Repeater::make('industries')
                                    ->label('Industries Using This Solution')
                                    ->schema([
                                        Forms\Components\TextInput::make('title')->required(),
                                        Forms\Components\Textarea::make('description')->rows(2)->required(),
                                        Forms\Components\TextInput::make('icon')
                                            ->placeholder('e.g., heroicon-o-office-building')
                                            ->default('heroicon-o-briefcase'),
                                    ])
                                    ->createItemButtonLabel('Add Industry')
                                    ->columnSpan('full'),
                                Forms\Components\Repeater::make('faq')
                                    ->label('Frequently Asked Questions')
                                    ->schema([
                                        Forms\Components\TextInput::make('question')->required(),
                                        Forms\Components\Textarea::make('answer')->rows(3)->required(),
                                    ])
                                    ->createItemButtonLabel('Add FAQ')
                                    ->columnSpan('full'),
                            ]),

                        Forms\Components\Tabs\Tab::make('CTAs')
                            ->schema([
                                Forms\Components\Group::make()
                                    ->statePath('demo_cta')
                                    ->schema([
                                        Forms\Components\TextInput::make('headline')
                                            ->default('Ready to transform your business?'),
                                        Forms\Components\Textarea::make('description')
                                            ->rows(2)
                                            ->default('See how PSuite ERP can automate and optimize your workflows.'),
                                        Forms\Components\TextInput::make('button_text')
                                            ->default('Book Free Demo'),
                                    ]),
                                Forms\Components\Group::make()
                                    ->statePath('contact_cta')
                                    ->schema([
                                        Forms\Components\TextInput::make('headline')
                                            ->default('Need More Information?'),
                                        Forms\Components\TextInput::make('description')
                                            ->default('Talk With Our Experts'),
                                        Forms\Components\TextInput::make('phone')
                                            ->default('+1 234 567 890'),
                                        Forms\Components\TextInput::make('whatsapp')
                                            ->default('+1 234 567 890'),
                                        Forms\Components\TextInput::make('email')
                                            ->default('experts@psuite-erp.com'),
                                    ]),
                            ]),

                        Forms\Components\Tabs\Tab::make('SEO Section')
                            ->schema([
                                Forms\Components\TextInput::make('seo_title'),
                                Forms\Components\Textarea::make('seo_description')->rows(2),
                                Forms\Components\TextInput::make('seo_keywords')
                                    ->placeholder('keywords, comma, separated'),
                                Forms\Components\TextInput::make('seo_canonical')
                                    ->placeholder('https://example.com/solutions/custom-url'),
                                Forms\Components\FileUpload::make('seo_og_image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('solutions/seo'),
                                Forms\Components\Textarea::make('seo_schema')
                                    ->label('Schema Markup (JSON-LD)')
                                    ->rows(5)
                                    ->placeholder('{"@context": "https://schema.org", ...}'),
                            ]),
                    ])
                    ->columnSpan('full')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\ImageColumn::make('image_path')->disk('public'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSolutions::route('/'),
            'create' => Pages\CreateSolution::route('/create'),
            'edit' => Pages\EditSolution::route('/{record}/edit'),
        ];
    }
}
