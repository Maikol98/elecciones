@extends('layout')
@section('contenido')

    <div class="container", style="margin-top: 10%">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-5 mx-auto">
                <div class="container shadow py-3 px-4" id="fondo">
                    <h1 class="display-4 text-center" id="texto">Elecciones</h1>
                    <h2 class="text-center" id="texto">Opciones de Busqueda</h2>
                    <a href="{{route('general')}}" class="btn btn-outline-danger btn-block" id="boton">General</a>
                    <a href="{{route('departamento')}}" class="btn btn-outline-warning btn-block" id="boton">Departamentos</a>
                    <a href="{{route('provincia')}}" class="btn btn-outline-success btn-block" id="boton">Provincias</a>
                </div>
            </div>
        </div>
    </div>


@endsection
