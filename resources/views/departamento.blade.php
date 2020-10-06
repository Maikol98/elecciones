@extends('layout')
@section('contenido')
    <div class="container", style="margin-top: 5%">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6">
                <div class="container py-3" id="fondo">
                    <h1 class="text-white">Opciones de Busqueda</h1>
                    <form class="" action="{{route('departamento.voto')}}"
                        method="POST" id="form1">
                        @csrf
                        <div class="form-group">
                            <label class="text-white">Escriba Departamento</label>
                            <input type="text" name="departamento" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-info btn-lg btn-block">Enviar</button>
                    </form>
                    <p></p>
                    @yield('reporte')
                    <a href="/" class="btn btn-info btn-lg btn-block">Volver</a>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-lg-6">
                <div class="container" id="fondo">
                    <h1 class="display-5 text-white text-center">Resultado</h1>
                    <div class="container py-3">
                        @yield('grafico')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

