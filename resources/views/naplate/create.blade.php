@extends('layout')
@section('content')
<h4 class="text-center mt-4">Naplati</h4>
{!! Form::open(array('route' =>
['naplate.store', $usluga -> id],'method'=>'POST')) !!}
<h5 class="text-center row ml-2">Usluga:</h5>
<input readonly class="row text-center input-group-text" name="id_usluge" id="id_usluge" value="{{$usluga -> id}}">
<h5 class="row text-center ml-2">Datum:</h5>
<input readonly class="row text-center input-group-text" name="datum" id="datum" value="{{$datum}}">
<h5 class="row text-center ml-2">Vreme:</h5>
<input readonly class="row text-center input-group-text" name="vreme" id="vreme" value="{{$vreme}}">

<form class="row mx-auto">
    <div class="form-group">

        <label for="employee">Zaposleni:</label>
        <select class="form-control input-sm" name="id_zaposlenog" id="id_zaposlenog">
            @foreach($zaposlenis as $zaposleni)
            <option value="{{$zaposleni->id}}">{{$zaposleni->ime}} </option>
            @endforeach
        </select></div>
    <button type="submit" class="btn btn-primary">Potvrdi</button>
</form>
@endsection
