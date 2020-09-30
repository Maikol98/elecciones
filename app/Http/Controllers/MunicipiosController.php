<?php

namespace App\Http\Controllers;

use App\Municipios;
use App\Canton;
use Illuminate\Http\Request;

class MunicipiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipios = Municipios::all();
        return response()->json($municipios, 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $municipios = new Municipios($request->all());
        $municipios->save();
        return response()->json($municipios, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Municipios  $municipios
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $canton = Canton::where('id_municipio',$id)->get();
        return response()->json($canton, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Municipios  $municipios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Municipios $municipios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Municipios  $municipios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Municipios $municipios)
    {
        //
    }
}
