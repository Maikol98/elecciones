<?php

namespace App\Http\Controllers;

use App\Provincias;
use App\Municipios;
use Illuminate\Http\Request;

class ProvinciasController extends Controller
{
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
