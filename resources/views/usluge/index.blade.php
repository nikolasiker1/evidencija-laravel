@extends('layout')
@section('content')
<div class="row mx-auto mt-3">
    <div class="col text-start mx-auto">
    <a class="btn btn-primary" href="{{route('usluge.create')}}">Dodaj uslugu</a>
    </div>
</div>
<div class="row mx-auto mt-3">
    <table class="table table-striped table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
              <th scope="col">Tip</th>
              <th scope="col">Trajanje</th>
              <th scope="col">Cena</th>
              <th scope="col">Operacija</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($uslugas as $usluga)
            <tr>
              <th scope="row">{{$usluga -> tip}}</th>
              <td>{{$usluga -> trajanje}}</td>
              <td>{{$usluga -> cena}}</td>
              <td class="containter-fluid d-flex justify-content-center">
                  <div class="row d-flex justify-content-center w-100 m-0 no-gutters" style="max-width:300px">
                    <div class="col text-center" style="color:white">
                        <a class="btn btn-primary" href="{{route('naplate.create')}}">Naplati</a>
                    </div>
                    <div class="col text-center" style="color:white">
                        <a class="btn btn-success">Izmeni</a>
                    </div>
                    <div class="col text-center" style="color:white">
                            {!! Form::open(['method' => 'DELETE','route' =>
                            ['usluge.destroy', $usluga->id],'style'=>'display:inline']) !!}
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
