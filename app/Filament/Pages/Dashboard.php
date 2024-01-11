<?php

namespace App\Filament\Pages;



use App\Filament\Resources\AdminResource\Widgets\StatsOverview;
use Filament\Facades\Filament;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
use Filament\Panel;

class Dashboard extends BaseDashboard
{
    use HasFiltersForm;

    protected static ?string $title = 'Панель администратора';



    public function panel(Panel $panel): Panel
    {
        return $panel
            ->pages([]);
    }

    public function getWidgets(): array
    {
        return [
            StatsOverview::class,
        ];
    }
}
