<?php

namespace App\Filament\Resources\SekolahResource\Pages;

use App\Filament\Resources\SekolahResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Konnco\FilamentImport\Actions\ImportAction;
use Konnco\FilamentImport\Actions\ImportField;

class ListSekolahs extends ListRecords
{
    protected static string $resource = SekolahResource::class;
    protected static ?string $title = 'Daftar Sekolah';

    protected function getActions(): array
    {
        return [
            ImportAction::make()
                ->label('Upload daftar sekolah')
                ->icon('heroicon-o-cloud-upload')
                ->fields([
                    ImportField::make('nama')
                        ->label('Nama Sekolah'),
                ]),
            Actions\CreateAction::make()
                ->label('Tambah Sekolah'),
        ];
    }
}
