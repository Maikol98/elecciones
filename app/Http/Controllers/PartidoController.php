<?php

namespace App\Http\Controllers;

use App\partido;
use Illuminate\Http\Request;

class PartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partido = Partido::all();
        return response()->json($partido, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partido = new Partido($request->all());
        $partido->save();
        return response()->json($partido, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function show(partido $partido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, partido $partido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function destroy(partido $partido)
    {
        //
    }
}
