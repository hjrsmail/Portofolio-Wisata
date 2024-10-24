<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TourismResource\Pages;
use App\Filament\Resources\TourismResource\RelationManagers;
use App\Models\Tourism;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;


class TourismResource extends Resource
{
    protected static ?string $model = Tourism::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $get) {
                        // Menghasilkan slug otomatis berdasarkan title
                        $slug = Str::slug($state); // Menggunakan Str::slug dengan benar
                        // Update slug di form
                        return $get('slug', $slug);
                    }),
                Forms\Components\TextInput::make('slug')
                    ->disabled(),
                Forms\Components\FileUpload::make('image')
                    ->image(),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListTourisms::route('/'),
            'create' => Pages\CreateTourism::route('/create'),
            'edit' => Pages\EditTourism::route('/{record}/edit'),
        ];
    }
}
