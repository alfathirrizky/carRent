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
    protected static ?string $navigationLabel = 'Cars Details';
    protected static ?string $modelLabel = 'Cars Details';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                ->schema([
                    Forms\Components\TextInput::make('nama_mobil')->placeholder('Contoh: Toyota Innova')->label('Nama Mobil')->required(),
                    Forms\Components\Select::make('durasi')->options([
                        '12 Jam' => '12 Jam',
                        '24 Jam' => '24 Jam',
                        '36 Jam' => '36 Jam',
                        '48 Jam' => '48 Jam',
                        '60 Jam' => '60 Jam',
                        '72 Jam' => '72 Jam'])->placeholder('Pilih Durasi')->required(),
                    Forms\Components\TextInput::make('harga')->placeholder('Contoh: Rp 1.000.000')->required(),
                    Forms\Components\Select::make('bahan_bakar')->options([
                    'Bensin' => 'Bensin',
                    'Diesel' => 'Diesel'])->label('Bahan Bakar')->placeholder('Pilih Bahan Bakar Mobil')->required(), 
                    Forms\Components\Select::make('tipe')->options([
                    'Matic' => 'Matic',
                    'Manual' => 'Manual'])->label('Tipe Mobil')->placeholder('Pilih Tipe Mobil')->required(), 
                    Forms\Components\Select::make('seater')->options([
                    '5 Seater' => '5 Seater',
                    '7 Seater' => '7 Seater'])->placeholder('Pilih Seater')->required(), 
                    Forms\Components\Select::make('kategori')->options([
                    'MPV' => 'MPV',
                    'SUV' => 'SUV'])->placeholder('Pilih Kategori Mobil')->required(), 
                    Forms\Components\FileUpload::make('gambar_mobil')->label('Gambar Mobil')->placeholder('Masukkan Gambar Mobil')->required()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_mobil')->label('Nama Mobil'),
                Tables\Columns\TextColumn::make('durasi'),
                Tables\Columns\TextColumn::make('harga'),
                Tables\Columns\TextColumn::make('bahan_bakar')->label('Bahan Bakar'),
                Tables\Columns\TextColumn::make('tipe'),
                Tables\Columns\TextColumn::make('seater'),
                Tables\Columns\TextColumn::make('kategori'),
                Tables\Columns\ImageColumn::make('gambar_mobil')->label('Gambar Mobil'),
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
