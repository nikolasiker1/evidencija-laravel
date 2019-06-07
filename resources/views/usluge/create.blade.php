@extends('layout')
@section('content')
<h4 class="text-center mt-4">Nova usluga</h4>
<div class="row mx-auto w-100">
<form class="mx-auto">
        <div class="form-group">
                <label for="type">Tip:</label>
                <input type="type" class="form-control" id="type" placeholder="Unesi tip" name="type">
              </div>
    <div class="form-group">
        <label for="price">Cena:</label>
        <input type="price" class="form-control" id="price" placeholder="Unesi cenu" name="price">
      </div>

    <div class="form-group">
        <label for="length">Trajanje (u minutima):</label>
        <input type="length" class="form-control" id="length" placeholder="Unesi trajanje" name="length">
    </div>
    <button type="submit" class="btn btn-primary">Potvrdi</button>
</form>
</div>
@endsection
