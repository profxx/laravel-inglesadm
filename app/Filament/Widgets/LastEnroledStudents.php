<?php

namespace App\Filament\Widgets;

use App\Models\Aluno;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class LastEnroledStudents extends TableWidget
{
    // Título do Widget
    protected static ?string $heading = 'Novos Alunos';

    // Definir a ordem de aparição
    protected static ?int $navigationSort = 15;

    // Colocar em duas colunas
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(fn (): Builder => Aluno::query()->latest('created_at'))
            ->columns([
                TextColumn::make('name')
                    ->label('Nome'),

                TextColumn::make('created_at')
                    ->label('Data de Entrada')
                    ->dateTime()
                    ->sortable(),
     

            ])
            ->filters([
                //
            ])
            ->headerActions([
                //
            ])
            ->recordActions([
                //
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //
                ]),
            ]);
    }
}
