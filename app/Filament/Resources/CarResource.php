<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarResource\Pages;
use App\Filament\Resources\CarResource\RelationManagers;
use App\Models\Car;
use Doctrine\DBAL\Schema\Column;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                ->schema([
                    Forms\Components\TextInput::make('nama_mobil'),
                    Forms\Components\TextInput::make('durasi'),
                    Forms\Components\TextInput::make('harga'),
                    Forms\Components\Select::make('bahan_bakar')->options([
                    'BENSIN' => 'BENSIN',
                    'DIESEL' => 'DIESEL']), 
                    Forms\Components\Select::make('tipe')->options([
                    'MATIC' => 'MATIC',
                    'MANUAL' => 'MANUAL']), 
                    Forms\Components\Select::make('seater')->options([
                    '5 SEATER' => '5 SEATER',
                    '7 SEATER' => '7 SEATER']), 
                    Forms\Components\FileUpload::make('gambar_mobil')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_mobil'),
                Tables\Columns\TextColumn::make('durasi'),
                Tables\Columns\TextColumn::make('harga'),
                Tables\Columns\TextColumn::make('bahan_bakar'),
                Tables\Columns\TextColumn::make('tipe'),
                Tables\Columns\TextColumn::make('seater'),
                Tables\Columns\ImageColumn::make('gambar_mobil'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }
}
