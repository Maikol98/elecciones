<?php

namespace App\Http\Controllers;

use App\mesa;
use App\actas;
use Illuminate\Http\Request;

class MesaController extends Controller
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
        $mesa = new Mesa($request->all());
        $mesa->save();
        return response()->json($mesa, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $acta = Actas::where('id_mesa',$id);
        return response()->json($acta, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mesa $mesa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(mesa $mesa)
    {
        //
    }
}
