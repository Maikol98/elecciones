@extends('departamento')
@section('grafico')

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
@endsection
@section('reporte')
    <a href="{{route('export.excel')}}" class="btn btn-info btn-lg btn-block">Generar Reporte</a>
@endsection
