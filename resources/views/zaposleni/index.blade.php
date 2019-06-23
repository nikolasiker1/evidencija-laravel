@extends('layout')
@section('content')

<div class="row mx-auto mt-3">
    <div class="col text-left mx-auto">
        <a class="btn btn-primary my-2 my-lg-0" href="{{route('zaposleni.create')}}">Dodaj zaposlenog</a>
    </div>
    <div class="col text-right mx-auto">
        {!! Form::open(['method'=>'GET','route' =>
        ['zaposleni.index'],'class'=>'navbar-form navbarleft','role'=>'search']) !!}
        <form class="form-inline my-2 my-lg-0 float-right">
            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Pretraga"
                aria-label="Pretraga">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pretraga</button>
        </form>
    </div>
</div>
<div class="row mx-auto mt-3">
    <table class="table table-striped table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Ime</th>
                <th scope="col">Prezime</th>
                <th scope="col">Email</th>
                <th scope="col">Broj telefona</th>
                <th scope="col">Operacija</th>
            </tr>
        </thead>
        <tbody>
            @foreach($zaposlenis as $zaposleni)
            <tr>
                <th scope="row">{{$zaposleni -> ime}}</th>
                <td>{{$zaposleni -> prezime}}</td>
                <td>{{$zaposleni -> email}}</td>
                <td>{{$zaposleni -> broj_telefona}}</td>
                <td class="containter-fluid d-flex justify-content-center">
                    <div class="row d-flex justify-content-center w-100 m-0 no-gutters" style="max-width:300px">
                        <div class="col text-center" style="color:white">
                            <a class="btn btn-success" href="{{route('zaposleni.edit', $zaposleni -> id)}}">Izmeni</a>
                        </div>
                        <div class="col text-center" style="color:white">
                            {!! Form::open(['method' => 'DELETE','route' =>
                            ['zaposleni.destroy', $zaposleni->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Obriši', ['class' => 'btn btn-danger'])
                            !!}

                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
