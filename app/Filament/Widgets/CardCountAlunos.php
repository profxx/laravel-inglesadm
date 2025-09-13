<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Aluno;

class CardCountAlunos extends StatsOverviewWidget
{
    // Definir a ordem de aparição
    protected static ?int $navigationSort = 10;

    protected function getStats(): array
    {
        $totalAlunos = Aluno::count(); // Conta quantos alunos existem na tabela

        return [
            Stat::make('Total de Alunos', $totalAlunos)
        ];
    }
}
