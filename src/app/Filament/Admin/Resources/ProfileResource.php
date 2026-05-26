<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProfileResource\Pages;
use App\Filament\Admin\Resources\ProfileResource\RelationManagers;
use App\Models\Profile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Grid;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\FileUpload;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

public static function form(Form $form): Form
{
    return $form
        ->schema([
            // Membuat grup section untuk bagian Hero & About
            Section::make('Hero & About Section')
                ->schema([
                    TextInput::make('hero_title')
                        ->label('Hero Title')
                        ->placeholder('Welcome my friends')
                        ->required(),
                    Textarea::make('hero_description')
                        ->label('Hero Description / Welcome Message')
                        ->placeholder('Selamat datang di web portfolio Saya...'),
                    Textarea::make('about_story')
                        ->label('My Story (About)')
                        ->rows(5)
                        ->placeholder('Hi! Nama Saya Siti Ahsanu Nadiyya Rizal...'),
                    Textarea::make('project_description')
                        ->label('Deskripsi Pengantar Project')
                        ->rows(3)
                        ->placeholder('Deskripsi pengantar bagian project'),

                    Grid::make(2)
                        ->schema([
                            FileUpload::make('profile_photo')
                                    ->label('Foto Profil Utama (Avatar)')
                                    ->image()
                                    ->avatar() // Menampilkan preview bulat di admin panel
                                    ->imageEditor() 
                                    ->circleCropper() // Memaksa crop lingkaran agar cocok dengan avatar
                                    ->directory('profile-photos'),

                                FileUpload::make('about_image')
                                    ->label('Foto Lingkungan Kerja (About Image)')
                                    ->image()
                                    ->imageEditor()
                                    ->imageEditorAspectRatios(['1:1']) // Memaksa crop kotak (1:1) sesuai CSS aspect-ratio kamu
                                    ->directory('profile-photos'),
                        ]),
                ]),

            // Membuat grup section untuk Kontak / Informasi
            Section::make('Information & Contact')
                ->schema([
                    Grid::make(2) // Membagi menjadi 2 kolom agar rapi
                        ->schema([
                            TextInput::make('name')
                                ->label('Full Name')
                                ->required(),
                            TextInput::make('phone')
                                ->label('Phone Number')
                                ->tel(),
                            TextInput::make('github')
                                ->label('GitHub URL')
                                ->url(),
                            TextInput::make('email')
                                ->label('Email Address')
                                ->email()
                                ->required(),
                        ]),
                ]),

            // Membuat grup section untuk Angka Statistik
            Section::make('Statistics')
                ->schema([
                    Grid::make(4) // Membagi menjadi 4 kolom berjejer
                        ->schema([
                            TextInput::make('experience_years')
                                ->label('Years of Experience')
                                ->numeric()
                                ->default(0),
                            TextInput::make('happy_customers')
                                ->label('Happy Customers')
                                ->numeric()
                                ->default(0),
                            TextInput::make('projects_finished')
                                ->label('Projects Finished')
                                ->numeric()
                                ->default(0),
                            TextInput::make('digital_awards')
                                ->label('Digital Awards')
                                ->numeric()
                                ->default(0),
                        ]),
                ]),
        ]);
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Nama')->searchable(),
                TextColumn::make('email')->label('Email'),
                TextColumn::make('update_at')->label('Terakhir Diubah')->dateTime(),
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
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}
