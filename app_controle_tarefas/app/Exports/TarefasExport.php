<?php

namespace App\Exports;

use App\Models\Tarefa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Shared\Date;




class TarefasExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Tarefa::all();
       return auth()->user()->tarefas()->get();
    }

    public function map($tarefa): array
    {
        return [
            $tarefa->id,
            $tarefa->tarefa,
            date('d/m/Y', strtotime($tarefa->data_limite_conclusao)), // Formata a data no formato Excel
        ];
    }

    public function headings(): array
    {
        return [
            'Id',
            'Tarefa',
            'Data limite',
        ];
    }
}
