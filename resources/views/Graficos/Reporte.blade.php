<table class="table">
    <thead class="thead">
        <tr>
            <th>VOTOS PRESIDENTE</th>
        </tr>
        <tr>
            <th></th>
            <th>Sigla</th>
            <th>Nombre Partido</th>
            <th>Votos</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($votos as $voto)
            <tr>
                <td></td>
                <th>{{$voto->sigla}}</th>
                <td>{{$voto->nombre_part}}</td>
                <td>{{$voto->cantidad}}</td>
            </tr>
            @endforeach
    </tbody>
    <tr></tr>
    <thead class="thead">
        <tr>
            <th>VOTOS DIPUTADOS</th>
        </tr>
        <tr>
            <th></th>
            <th>Sigla</th>
            <th>Nombre Partido</th>
            <th>Votos</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($votosDiputado as $voto)
            <tr>
                <td></td>
                <th>{{$voto->sigla}}</th>
                <td>{{$voto->nombre_part}}</td>
                <td>{{$voto->cantidad}}</td>
            </tr>
            @endforeach
    </tbody>
</table>
