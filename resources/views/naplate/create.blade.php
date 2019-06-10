@extends('layout')
@section('content')
<h4 class="text-center mt-4">Naplati</h4>
<div class="row mx-auto w-100">
    <form class="mx-auto">
        <div class="form-group">
      <label for="employee">Zaposleni:</label>
      {!! Form::select('zaposleni', $zaposlenis, null, array('class' => 'form-control')) !!}
    </div>
    <button type="submit" class="btn btn-primary">Potvrdi</button>
    </form>
@endsection
