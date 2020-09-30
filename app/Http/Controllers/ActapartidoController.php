<?php

namespace App\Http\Controllers;

use App\actapartido;
use App\Partido;
use App\actas;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ActapartidoController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partido = Partido::where('nombre',$request->input('nombre'))->get();

        $acta = Actas::where('codigo', $request->input('codigo'))->get();

        $actapartido = new Actaspartido($request->all());
        $actapartido->id_acta = $acta->id;
        $actapartido->id_partido = $partido->id;
        $actapartido->save();
        return response()->json($actapartido, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\actapartido  $actapartido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_acta, $id_partido)
    {
        $actapartido = Actapartido::where('id_acta',$id_acta)->where('id_partido',$id_partido)->get();
        $actapartido->presidencia = $request->input('presidencia');
        $actapartido->diputado = $request->input('diputado');
        $actapartido->update();

        return response()->json($actapartido, 200);
    }

    public function conteo($partido){
        $id_partido = Partido::where('nombre', $partido)->get();

        $votos = DB::table('actapartido')
            ->select(DB::raw('SUM(presidencia) as cantidad'))
            ->where('id_partido',$id_partido->id)->first();

        return response()->json($votos, 200);
    }

    public function conteoDepartemento($departemento){
        // $id_recinto = Recintos::where('departamento',$departemento)->pluck('id');
        // $id_mesa = mesa::where('id_recinto', $id_recinto)->pluck('id');
        // $id_acta = acta::where('id_mesa',$id_mesa)->pluck('id');
        $votos = DB::table('actapartido')
            ->join('actas','actapartido.id_acta','=','actas.id')
            ->join('mesa','actas.id_mesa','=','mesa.id')
            ->join('recintos','mesa.id_recinto','=','recintos.id')
            ->select('actapartido.id_partido', DB::raw('SUM(actapartido.presidencia) as cantidad'))
            ->where('recintos.departemento',$departemento)
            ->groupBy('actapartido.id_partido')
            ->get();
        return response()->json($votos, 200);
    }

    public function conteoProvincia($provincia){

    }


}
