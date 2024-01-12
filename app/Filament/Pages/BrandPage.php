<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
class BrandPage extends Page
{
    public static $name = 'BRand Page';

    protected static string $view = 'filament.pages.brand-page';


    protected ?string $maxContentWidth = "full";

    public function getTitle(): string
    {
        return "Список марок машин";
    }

    public static function getNavigationLabel(): string
    {
        return 'Список марок машин';
    }


    protected static ?int $navigationSort = 3;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-path';

    public function component()
    {
        return BrandPage::class;
    }
}
