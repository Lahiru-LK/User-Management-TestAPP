<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form->schema([
            FileUpload::make('profile_photo_path')
                ->label('Profile Photo')
                ->disk('public')                     // store on public disk
                ->directory('profile-photos')        // storage/app/public/profile-photos
                ->image()
                ->imageEditor()
                ->imagePreviewHeight('120')
                ->maxSize(2048),

            TextInput::make('name')
                ->required()
                ->maxLength(255),

            TextInput::make('email')
                ->email()
                ->unique(ignoreRecord: true)
                ->required()
                ->maxLength(255),

            DateTimePicker::make('email_verified_at')
                ->label('Email verified at')
                ->dehydrated(true) // Ensure the value is sent to the model
                ->nullable(),


            // Password – create: required / edit: optional; auto-hash via User model casts
            TextInput::make('password')
                ->password()
                ->revealable()
                // only send to model if filled
                ->dehydrated(fn($state) => filled($state))
                // when filled, pass raw value; hashing done by casts('password' => 'hashed')
                ->dehydrateStateUsing(fn($state) => $state)
                ->required(fn(string $operation) => $operation === 'create')
                ->rule('min:6')
                ->maxLength(255),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('profile_photo_path')
                    ->label('Avatar')
                    ->disk('public')
                    ->circular()
                    ->size(40)
                    // optional fallback (put a file at public/images/default-avatar.png or remove this line)
                    ->defaultImageUrl(asset('images/default-avatar.png')),

                TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('email')
                    ->searchable(),

                TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit'   => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
