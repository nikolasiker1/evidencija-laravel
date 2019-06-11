@extends('layout')
@section('content')

<div class="row mx-auto mt-3">
    <table class="table table-striped table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID naplate</th>
                <th scope="col">Datum naplate</th>
                <th scope="col">Vreme naplate</th>
                <th scope="col">Operacija</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($naplatas as $naplata)
            <tr>
                <th scope="row">{{$naplata -> id}}</th>
                <td>{{$naplata -> datum}}</td>
                <td>{{$naplata -> vreme}}</td>
                <td class="text-center">
                    {!! Form::open(['method' => 'DELETE','route' =>
                    ['naplate.destroy', $naplata->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Obriši', ['class' => 'btn btn-danger text-center'])
                    !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
