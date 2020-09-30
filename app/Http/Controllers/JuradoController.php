<?php

namespace App\Http\Controllers;

use App\jurado;
use Illuminate\Http\Request;

class JuradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurado = Jurado::all();
        return response()->json($jurado, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jurado = new Jurado($request->all());
        $jurado->save();
        return response()->json($jurado, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jurado  $jurado
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $jurado = Jurado::where('id_mesa', $id)->get();
        return response()->json($jurado, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jurado  $jurado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jurado $jurado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jurado  $jurado
     * @return \Illuminate\Http\Response
     */
    public function destroy(jurado $jurado)
    {
        //
    }
}
