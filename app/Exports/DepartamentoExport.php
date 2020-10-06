<?php

namespace App\Exports;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Concerns\FromCollection;

class DepartamentoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $votos = DB::table('actapartido')
            ->join('partidos','actapartido.id_partido','=','partidos.id')
            ->join('actas','actapartido.id_acta','=','actas.id')
            ->join('mesa','actas.id_mesa','=','mesa.id')
            ->join('recintos','mesa.id_recinto','=','recintos.id')
            ->select('partidos.nombre_part','partidos.sigla', DB::raw('SUM(actapartido.cant_votos_pres) as cantidad'))
            ->groupBy('partidos.nombre_part','partidos.sigla')->orderBy('cantidad', 'desc')
            ->get();

        return $votos;
    }
}
