<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WebResource\Pages;
use App\Filament\Resources\WebResource\RelationManagers;
use App\Models\Web;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WebResource extends Resource
{
    protected static ?string $model = Web::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('page')->label("Page"),
                Forms\Components\TextInput::make('title')->label('Title'),
                Forms\Components\MarkdownEditor::make('content')->label('Content'),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('content'),
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
            'index' => Pages\ListWebs::route('/'),
            'create' => Pages\CreateWeb::route('/create'),
            'edit' => Pages\EditWeb::route('/{record}/edit'),
        ];
    }
}
