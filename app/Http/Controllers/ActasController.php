<?php

namespace App\Http\Controllers;

use App\actas;
use Illuminate\Http\Request;

class ActasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombreLocalidad = $request->input('Localidad');

        $Localidad = Canton::where('nombre', $nombreLocalidad)->get();

        $Localidad->nombre;
        
        $actas = new Actas($request->all());
        $actas->voto_nulo = 0;
        $actas->voto_blanco = 0;
        $actas->voto_valido = 0;
        $actas->save();
        return response()->json($actas, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\actas  $actas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actas = actapartido::where('id_acta', $id)->get();
        return response()->json($actas, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\actas  $actas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $actas = Actas::findOrFail($id);
        $actas->voto_nulo = $request->input('voto_nulo');
        $actas->voto_blanco = $request->input('voto_blanco');
        $actas->voto_valido = $request->input('voto_valido');
        $actas->save();
        return response()->json($actas, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\actas  $actas
     * @return \Illuminate\Http\Response
     */
    public function destroy(actas $actas)
    {
        //
    }
}
