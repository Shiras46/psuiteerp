<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeHeroResource\Pages;
use App\Models\HomeHero;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class HomeHeroResource extends Resource
{
    protected static ?string $model = HomeHero::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\TextInput::make('subtitle'),
                Forms\Components\Textarea::make('description')->columnSpan('full'),
                Forms\Components\FileUpload::make('image_path')->image()->disk('public')->directory('home-hero'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\ImageColumn::make('image_path')->disk('public'),
                Tables\Columns\TextColumn::make('updated_at')->dateTime(),
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
            'index' => Pages\ListHomeHeroes::route('/'),
            'create' => Pages\CreateHomeHero::route('/create'),
            'edit' => Pages\EditHomeHero::route('/{record}/edit'),
        ];
    }
}
