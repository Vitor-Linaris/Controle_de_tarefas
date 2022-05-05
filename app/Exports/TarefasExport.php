<?php

namespace App\Exports;

use App\Models\Tarefa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TarefasExport implements FromCollection, WithHeadings, WithCustomCsvSettings, WithMapping
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
        return [

            'ID da Tarefa',
            'Tarefa',
            'Data Limite Conclusão',
                /* 'Data Criação', */
            ];
    }

    public function map($linha): array
    {
        // This example will return 3 rows.
        // First row will have 2 column, the next 2 will have 1 column
        return [
            [
                $linha->id,
                $linha->tarefa,
                date('d/m/Y'. strtotime($linha->data_limite_conclusao)),
                
            ]
        ];
    }
}
