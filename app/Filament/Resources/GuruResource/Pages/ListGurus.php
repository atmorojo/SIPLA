<?php

namespace App\Filament\Resources\GuruResource\Pages;

use App\Filament\Resources\GuruResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Konnco\FilamentImport\Actions\ImportAction;
use Konnco\FilamentImport\Actions\ImportField;
use Filament\Forms\Components\Select;

class ListGurus extends ListRecords
{
    protected static string $resource = GuruResource::class;

    protected function getActions(): array
    {
        return [
            ImportAction::make()
                ->label('Upload daftar guru')
                ->icon('heroicon-o-cloud-upload')
                ->fields([
                    ImportField::make('nama')
                        ->label('Nama Guru'),
                    Select::make('sekolah_id')
                        ->relationship('sekolah', 'nama')
                        ->label('Asal Sekolah')
                ]),
                Actions\CreateAction::make()
                    ->label('Tambah Guru'),
        ];
    }
}
