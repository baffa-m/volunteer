<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use App\Models\Users;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UsersResource\Pages;
use App\Filament\Resources\UsersResource\Pages\CreateUsers;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UsersResource\RelationManagers;
use Filament\Tables\Columns\TextColumn;

class UsersResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('email')->required(),
                TextInput::make('password')->required()
                ->password()
                ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                ->visible(fn ($livewire) => $livewire instanceof CreateUsers),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('email'),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUsers::route('/create'),
            'edit' => Pages\EditUsers::route('/{record}/edit'),
        ];
    }
}
