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
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td class="containter-fluid d-flex justify-content-center">
                  <div class="row d-flex justify-content-center w-100 m-0 no-gutters" style="max-width:300px">
                    <div class="col text-center" style="color:white">
                        <a class="btn btn-primary" href="{{route('naplate.create')}}">Naplati</a>
                    </div>
                    <div class="col text-center" style="color:white">
                        <a class="btn btn-success">Izmeni</a>
                    </div>
                    <div class="col text-center" style="color:white">
                        <a class="btn btn-danger">Obriši</a>
                    </div>
                  </div>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td class="containter-fluid d-flex justify-content-center">
                    <div class="row d-flex justify-content-center w-100 m-0 no-gutters" style="max-width:300px">
                      <div class="col text-center" style="color:white">
                          <a class="btn btn-primary" href="{{route('naplate.create')}}">Naplati</a>
                      </div>
                      <div class="col text-center" style="color:white">
                          <a class="btn btn-success">Izmeni</a>
                      </div>
                      <div class="col text-center" style="color:white">
                          <a class="btn btn-danger">Obriši</a>
                      </div>
                    </div>
                </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td class="containter-fluid d-flex justify-content-center">
                    <div class="row d-flex justify-content-center w-100 m-0 no-gutters" style="max-width:300px">
                      <div class="col text-center" style="color:white">
                          <a class="btn btn-primary" href="{{route('naplate.create')}}">Naplati</a>
                      </div>
                      <div class="col text-center" style="color:white">
                          <a class="btn btn-success">Izmeni</a>
                      </div>
                      <div class="col text-center" style="color:white">
                          <a class="btn btn-danger">Obriši</a>
                      </div>
                    </div>
                </td>
            </tr>
          </tbody>
    </table>
</div>
@endsection
