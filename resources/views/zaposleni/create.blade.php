@extends('layout')
@section('content')
<h4 class="text-center mt-4">Novi zaposleni</h4>

<div class="row mx-auto w-100">
<form class="mx-auto">
    <div class="form-group">
        <label for="name">Ime:</label>
        <input type="name" class="form-control" id="name" placeholder="Unesi ime" name="name">
      </div>

    <div class="form-group">
        <label for="lastname">Prezime:</label>
        <input type="lastname" class="form-control" id="lastname" placeholder="Unesi prezime" name="lastname">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Unesi email" name="email">
    </div>

    <div class="form-group">
        <label for="phone">Broj telefona:</label>
        <input type="phone" class="form-control" id="phone" placeholder="Unesi broj telefona" name="phone">
    </div>
    <button type="submit" class="btn btn-primary">Potvrdi</button>
</form>
</div>
@endsection
