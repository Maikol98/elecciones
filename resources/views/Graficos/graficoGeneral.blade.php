@extends('layout')
@section('contenido')
    <div class="container py-4">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <div class="container py-4">
                    <a href="{{route('exportview.excel')}}" class="btn btn-info btn-lg btn-block">Generar Reporte</a>
                    <a href="/" class="btn btn-info btn-lg btn-block">Volver</a>
                    <p></p>
                    <table class="table">
                        <thead class="thead" style="background-color: grey">
                            <tr>
                                <th class="text-white" scope="col">Sigla</th>
                                <th class="text-white" scope="col">Nombre Partido</th>
                                <th class="text-white" scope="col">Votos</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($votos as $voto)
                                <tr>
                                    <th class="text-white" scope="row">{{$voto->sigla}}</th>
                                    <td class="text-white">{{$voto->nombre_part}}</td>
                                    <td class="text-white">{{$voto->cantidad}}</td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
