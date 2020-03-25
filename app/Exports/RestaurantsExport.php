<?php

namespace App\Exports;

use App\Restaurante;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class RestaurantsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Restaurante::all();
    }

    public function headings(): array
    {
        return [
            'Clave',
            'Nombre del restaurante',
            'Dirección',
            'Teléfono',
            'Horario'
        ];
    }
}
