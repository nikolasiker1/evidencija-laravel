<h1>Lista naplata</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>ID usluge</th>
            <th>ID Zaposlenog</th>
            <th>Datum</th>
            <th>Vreme</th>
        </tr>
    </thead>
    <tbody>
        @foreach($naplate as $naplata)
        <tr>
            <td>{{ $naplata->id }}</td>
            <td>{{ $naplata->id_usluge }}</td>
            <td>{{ $naplata->id_zaposlenog }}</td>
            <td>{{ $naplata->datum }}</td>
            <td>{{ $naplata->vreme }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
