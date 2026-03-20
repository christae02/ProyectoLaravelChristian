<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Illuminate\Support\Facades\DB;
use App\Models\Movimientos;

class MovimientosExport implements FromCollection, WithHeadings, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        Movimientos::with(['doctor', 'existencia'])->get();

        return Movimientos::leftjoin('doctor','movimientos.doctor_id', '=' , 'doctor.id')
            ->leftjoin('existencia','movimientos.existencia_id','=','existencia.id')
            ->join('medicamento','existencia.medicamento_id','=','medicamento.id')
            ->select(
                'movimientos.tipo',
                'movimientos.fecha',
                DB::raw("CONCAT(medicamento.nombre, ' ' , medicamento.mg , 'mg') as denominacion"),
                'medicamento.presentacion',
                'movimientos.cantidad',
                DB::raw("CONCAT(doctor.nombre, ' ', doctor.apellidoPaterno, ' ', doctor.apellidoMaterno) as nombre_completo"),
                'doctor.cedProf',
                'movimientos.domicilio',
                'movimientos.receta'
            )
            ->get();
    }

    public function headings(): array
    {
        return[
            'Tipo',
            'Fecha',
            'Denominacion generica y/o distintiva de antibioticos',
            'Presentacion del Medicamento',
            'Cantidad',
            'Nombre de quien prescribe',
            'Cedula',
            'Domicilio',
            'Se retiene receta'
        ];
    }

    public function styles(Worksheet $sheet){
        return[
            1 => ['font' => ['bold' => true]]
        ];
    }
}
