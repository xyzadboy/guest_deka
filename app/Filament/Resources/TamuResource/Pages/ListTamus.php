<?php

namespace App\Filament\Resources\TamuResource\Pages;

use App\Filament\Resources\TamuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTamus extends ListRecords
{
    protected static string $resource = TamuResource::class;

    // Mengubah heading menjadi "Tamu"
    public function getTitle(): string
    {
        return 'Tamu';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
