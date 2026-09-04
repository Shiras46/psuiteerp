<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DemoRequestResource\Pages;
use App\Models\DemoRequest;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class DemoRequestResource extends Resource
{
    protected static ?string $model = DemoRequest::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox-in';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->disabled(),
                Forms\Components\TextInput::make('company')->disabled(),
                Forms\Components\TextInput::make('email')->disabled(),
                Forms\Components\TextInput::make('phone')->disabled(),
                Forms\Components\TextInput::make('country')->disabled(),
                Forms\Components\TextInput::make('solution_interested')->disabled(),
                Forms\Components\Textarea::make('message')->disabled()->columnSpan('full'),
                Forms\Components\Select::make('status')
                    ->options([
                        'Pending' => 'Pending',
                        'Contacted' => 'Contacted',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('company'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\BadgeColumn::make('status')->colors([
                    'primary' => 'Pending',
                    'success' => 'Contacted',
                ]),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
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
            'index' => Pages\ListDemoRequests::route('/'),
            'edit' => Pages\EditDemoRequest::route('/{record}/edit'),
        ];
    }
}
