<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrganizationsResource\Pages;
use App\Filament\Resources\OrganizationsResource\RelationManagers;
use App\Models\Organization;
use App\Models\Organizations;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrganizationsResource extends Resource
{
    protected static ?string $model = Organization::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('org_name')->required(),
                TextInput::make('email')->required(),
                TextInput::make('contact_phone')->required(),
                RichEditor::make('what we do')->required(),
                TextInput::make('address')->required(),
                TextInput::make('state_id')->required(),
                TextInput::make('user_id')->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('org_name'),
                TextColumn::make('user_id'),
                TextColumn::make('email'),
                TextColumn::make('contact_phone'),
                TextColumn::make('state'),
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
            'index' => Pages\ListOrganizations::route('/'),
            'create' => Pages\CreateOrganizations::route('/create'),
            'edit' => Pages\EditOrganizations::route('/{record}/edit'),
        ];
    }
}
