<?php

namespace App\Filament\Resources\TamuResource\Widgets;

use App\Models\Tamu; // Pastikan model ini sesuai dengan namespace model tamu
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TamuOverview extends BaseWidget
{
   
    protected function getStats(): array
    {
        // Menghitung total tamu
        $totalTamu = Tamu::count();
        
        // Menghitung jumlah tamu laki-laki
        $totalLaki = Tamu::where('gender', 'laki-laki')->count();
        
        // Menghitung jumlah tamu perempuan
        $totalPerempuan = Tamu::where('gender', 'perempuan')->count();

        return [
            Stat::make('Total Tamu', $totalTamu)
                ->color('primary'),
            Stat::make('Jumlah Tamu Laki-Laki', $totalLaki)
                ->color('success'),
            Stat::make('Jumlah Tamu Perempuan', $totalPerempuan)
                ->color('danger'),
        ];
    }
}
