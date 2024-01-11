<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BrandResource\RelationManagers\BrandsRelationManager;
use App\Filament\Resources\CarModelResource\Pages;
use App\Models\Brand;
use App\Models\CarModel;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Filters\SelectFilter;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarModelResource extends Resource
{
    protected static ?string $model = CarModel::class;

    protected static ?string $modelLabel = 'модель';

    protected static ?string $pluralModelLabel = 'Список моделей';

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    protected static ?int $navigationSort = 3;

    public static function getNavigationLabel(): string
    {
        return 'Список моделей';
    }

    protected static ?string $recordNameAttribute = 'Название';

    public static function form(Form $form): Form
    {
        return $form
            ->columns([
                'sm' => 1,
                'xl' => 1,
                '2xl' => 1,
            ])
            ->schema([
                TextInput::make('name')->label('Модель')->required(),
                TextInput::make('slug')->required(),
                Select::make('mark_id')
                    ->label('Марка')->required()
                    ->options(Brand::all()->pluck('name', 'id'))
                    ->searchable()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->searchable()->sortable(),
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('slug')->searchable()->sortable(),
                TextColumn::make('brand.name')->searchable()->sortable(),
            ])
            ->filters([
                SelectFilter::make('mark_id')
                    ->relationship('brand', 'name')
            ])
            ->actions([
                EditAction::make()->slideOver(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->recordUrl(null);
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
            'index' => Pages\ListCarModels::route('/'),
            'create' => Pages\CreateCarModel::route('/create'),
            'edit' => Pages\EditCarModel::route('/{record}/edit'),
        ];
    }
}
