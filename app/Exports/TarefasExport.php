<?php

namespace App\Exports;

use App\Models\Tarefa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class TarefasExport implements FromCollection, WithHeadings, WithCustomCsvSettings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return Tarefa::all();
        return auth()->user()->tarefas()->get();
    }

    public function getCsvSettings(): array
    {
        return [
            'use_bom' => true,
        ];
    }

    public function headings():array { //declaração do tipo de retorno
        return ['ID da Tarefa',
                'ID do Usuário',
                'Tarefa',
                'Data Limite Conclusão',
                'Data Criação',
                'Data Atualizada'
            ];
    }
}
