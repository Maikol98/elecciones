<?php

namespace App\Http\Controllers;

use App\Departamentos;
use App\Provincias;
use Illuminate\Support\Facades\DB;

use App\Exports\DepartamentoExport;
use App\Exports\DepartamentoExportVista;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DepartamentosController extends Controller
{

    public function exportExcelDepartamento(){
        return Excel::download(new DepartamentoExport, 'departamento.xlsx');
    }

    public function export(){
        return Excel::download(new DepartamentoExportVista, 'Datos.xlsx');
    }








    public function votosDepartamentos(Request $request){
        $votos = DB::table('actapartido')
            ->join('partidos','actapartido.id_partido','=','partidos.id')
            ->join('actas','actapartido.id_acta','=','actas.id')
            ->join('mesa','actas.id_mesa','=','mesa.id')
            ->join('recintos','mesa.id_recinto','=','recintos.id')
            ->select('partidos.nombre_part','partidos.sigla', DB::raw('SUM(actapartido.cant_votos_pres) as cantidad'))
            ->where('recintos.departamento',$request->input('departamento'))
            ->groupBy('partidos.nombre_part','partidos.sigla')->orderBy('cantidad', 'desc')
            ->get();

        $votosdip = DB::table('actapartido')
            ->join('partidos','actapartido.id_partido','=','partidos.id')
            ->join('actas','actapartido.id_acta','=','actas.id')
            ->join('mesa','actas.id_mesa','=','mesa.id')
            ->join('recintos','mesa.id_recinto','=','recintos.id')
            ->select('partidos.nombre_part','partidos.sigla', DB::raw('SUM(actapartido.cant_votos_dip) as cantidad'))
            ->where('recintos.departamento',$request->input('departamento'))
            ->groupBy('partidos.nombre_part','partidos.sigla')->orderBy('cantidad', 'desc')
            ->get();

        return view('Graficos/graficodep', compact('votos','votosdip'));
    }


    public function votosGeneral(){
        $votos = DB::table('actapartido')
            ->join('partidos','actapartido.id_partido','=','partidos.id')
            ->join('actas','actapartido.id_acta','=','actas.id')
            ->join('mesa','actas.id_mesa','=','mesa.id')
            ->join('recintos','mesa.id_recinto','=','recintos.id')
            ->select('partidos.nombre_part','partidos.sigla', DB::raw('SUM(actapartido.cant_votos_pres) as cantidad'))
            ->groupBy('partidos.nombre_part','partidos.sigla')->orderBy('cantidad', 'desc')
            ->get();

        return view('Graficos/graficoGeneral', compact('votos'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamentos::all();

        return response()->json($departamentos, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $departamentos = new Departamentos( $request->all() );
        $departamentos->save();
        return response()->json($departamentos, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Departamentos  $departamentos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $provincia = Provincia::where('id_departamento',$id)->get();
        return response()->json($provincia, 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departamentos  $departamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $departamentos = Departamentos::findOrFail($id);
        $departamentos->nombre = $request->input('nombre');
        $departamentos->save();
        return response()->json($departamentos, 200);
    }


}
