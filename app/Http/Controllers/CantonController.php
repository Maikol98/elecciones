<?php

namespace App\Http\Controllers;

use App\Canton;
use App\Recintos;
use Illuminate\Http\Request;

class CantonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $canton = Canton::all();
        return response()->json($canton, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $canton = new Canton($request->all());
        $canton->save();
        return response()->json($canton, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Canton  $canton
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recinto = Recintos::where('id_canton',$id)->get();
        return response()->json($recinto, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Canton  $canton
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Canton $canton)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Canton  $canton
     * @return \Illuminate\Http\Response
     */
    public function destroy(Canton $canton)
    {
        //
    }
}
