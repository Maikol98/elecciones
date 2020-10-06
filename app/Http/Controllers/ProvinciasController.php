<?php

namespace App\Http\Controllers;

use App\Provincias;
use App\Municipios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProvinciasController extends Controller
{

    public function votosProvinvias(Request $request){
        $votos = DB::table('actapartido')
            ->join('partidos','actapartido.id_partido','=','partidos.id')
            ->join('actas','actapartido.id_acta','=','actas.id')
            ->join('mesa','actas.id_mesa','=','mesa.id')
            ->join('recintos','mesa.id_recinto','=','recintos.id')
            ->select('partidos.nombre_part','partidos.sigla', DB::raw('SUM(actapartido.cant_votos_pres) as cantidad'))
            ->where('recintos.provincia',$request->input('provincia'))
            ->groupBy('partidos.nombre_part','partidos.sigla')->orderBy('cantidad', 'desc')
            ->get();

        return view('Graficos/graficoprov', compact('votos'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provincias = Provincias::all();
        return response()->json($provincias, 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provincias = new Provincias($request->all());
        $provincias->save();
        return response()->json($provincias, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Provincias  $provincias
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $municipio = Municipios::where('id_provincia',$id)->get();
        return response()->json($municipio, 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Provincias  $provincias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provincias $provincias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Provincias  $provincias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provincias $provincias)
    {
        //
    }
}
