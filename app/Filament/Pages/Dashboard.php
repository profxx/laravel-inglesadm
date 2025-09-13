<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected static ?string $title = 'Painel Principal';

    public function getColumns(): int | array
    {
        return [
            'md' => 1,
            'xl' => 2,
        ];
    }
}

