<?php

namespace App\Http\Controllers;

use App\Departamentos;
use App\Provincias;
use Illuminate\Http\Request;

class DepartamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamentos::all();

        return response()->json($departamentos, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $departamentos = new Departamentos( $request->all() );
        $departamentos->save();
        return response()->json($departamentos, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Departamentos  $departamentos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $provincia = Provincia::where('id_departamento',$id)->get();
        return response()->json($provincia, 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departamentos  $departamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $departamentos = Departamentos::findOrFail($id);
        $departamentos->nombre = $request->input('nombre');
        $departamentos->save();
        return response()->json($departamentos, 200);
    }


}
