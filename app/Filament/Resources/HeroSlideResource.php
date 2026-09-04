<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroSlideResource\Pages;
use App\Filament\Resources\HeroSlideResource\RelationManagers;
use App\Models\HeroSlide;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HeroSlideResource extends Resource
{
    protected static ?string $model = HeroSlide::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()->schema([
                    Forms\Components\TextInput::make('eyebrow')->maxLength(255),
                    Forms\Components\Textarea::make('title')->required()->helperText('You can use HTML like <br> and <span class="gradient-text">'),
                    Forms\Components\Textarea::make('description'),
                    Forms\Components\FileUpload::make('image')->image()->disk('public')->directory('hero_slides'),
                    Forms\Components\Grid::make(2)->schema([
                        Forms\Components\TextInput::make('primary_button_text')->maxLength(255),
                        Forms\Components\TextInput::make('primary_button_link')->maxLength(255),
                        Forms\Components\TextInput::make('secondary_button_text')->maxLength(255),
                        Forms\Components\TextInput::make('secondary_button_link')->maxLength(255),
                    ]),
                    Forms\Components\Repeater::make('metrics')
                        ->schema([
                            Forms\Components\TextInput::make('value')->required(),
                            Forms\Components\TextInput::make('label')->required(),
                        ])->columns(2)->helperText('For Slide 1 type metrics (e.g. 50+ Clients)'),
                    Forms\Components\Repeater::make('features')
                        ->schema([
                            Forms\Components\TextInput::make('text')->required(),
                        ])->helperText('For Slide 2/3 type bullet points'),
                    Forms\Components\TextInput::make('order')->numeric()->default(0),
                    Forms\Components\Toggle::make('is_active')->default(true),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->disk('public'),
                Tables\Columns\TextColumn::make('eyebrow')->searchable(),
                Tables\Columns\TextColumn::make('title')->limit(50),
                Tables\Columns\TextColumn::make('order')->sortable(),
                Tables\Columns\IconColumn::make('is_active')->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHeroSlides::route('/'),
            'create' => Pages\CreateHeroSlide::route('/create'),
            'edit' => Pages\EditHeroSlide::route('/{record}/edit'),
        ];
    }    
}
