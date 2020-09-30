<?php

namespace App\Http\Controllers;

use App\Recintos;
use Illuminate\Http\Request;

class RecintosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recintos = Recintos::all();
        return response()->json($recintos, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recintos = new Recintos($request->all());
        $recintos->save();
        return response()->json($recintos, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recintos  $recintos
     * @return \Illuminate\Http\Response
     */
    public function show(Recintos $recintos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recintos  $recintos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recintos $recintos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recintos  $recintos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recintos $recintos)
    {
        //
    }
}
