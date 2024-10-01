<?php

namespace App\Filament\Resources\TamuResource\Pages;

use App\Filament\Resources\TamuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\TamuResource\Widgets\TamuOverview;
use App\Filament\Resources\TamuResource\Widgets\GenderOverview;



class ListTamus extends ListRecords
{
    protected static string $resource = TamuResource::class;

    // Mengubah heading menjadi "Tamu"
    public function getTitle(): string
    {
        return 'Tamu';
    }

    protected function getHeaderWidgets(): array
    {
        return [
            TamuOverview::class,
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            \EightyNine\ExcelImport\ExcelImportAction::make()
            ->color("primary"),
            Actions\CreateAction::make(),
        ];
    }
}
