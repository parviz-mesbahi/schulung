<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LessonResource\Pages;
use App\Filament\Resources\LessonResource\RelationManagers;
use App\Models\Lesson;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LessonResource extends Resource
{
    protected static ?string $model = Lesson::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('number')
                    ->required()
                    ->label('Number'),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->label('Title'),
                Forms\Components\TextInput::make('description')
                    ->required()
                    ->label('Description'),
//                Forms\Components\TextInput::make('content')
//                ->required()
//                ->label('Content'),
                Forms\Components\MarkdownEditor::make('content')
                    ->required()
                    ->label('Content'),
//                Forms\Components\RichEditor::make('content')
//                    ->required()
//                    ->label('Content'),

//                RichEditor::make('description')
//                    ->toolbarButtons([
//                        'attachFiles',
//                        'blockquote',
//                        'bold',
//                        'bulletList',
//                        'codeBlock',
//                        'h2',
//                        'h3',
//                        'italic',
//                        'link',
//                        'orderedList',
//                        'redo',
//                        'strike',
//                        'underline',
//                        'undo',
//                    ])
//                    ->label('description'),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('number')->sortable(),
                Tables\Columns\TextColumn::make('title')->sortable(),
                Tables\Columns\TextColumn::make('description'),
//               Tables\Columns\TextColumn::make('content'),

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
            'index' => Pages\ListLessons::route('/'),
            'create' => Pages\CreateLesson::route('/create'),
            'edit' => Pages\EditLesson::route('/{record}/edit'),
        ];
    }
}
