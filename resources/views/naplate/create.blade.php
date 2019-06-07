@extends('layout')
@section('content')
<h4 class="text-center mt-4">Naplati</h4>
<div class="row mx-auto w-100">
    <form class="mx-auto">
        <div class="form-group">
      <label for="employee">Zaposleni:</label>
      <input type="employee" class="form-control" id="employee" placeholder="Izaberi zaposlenog" name="employee">
    </div>
    <button type="submit" class="btn btn-primary">Potvrdi</button>
    </form>
@endsection
