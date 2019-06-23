@extends('layout')
@section('content')
<h4 class="text-center mt-4">Nova usluga</h4>
@if (count($errors) < 0) <div class="alert alert-danger">
    <strong>Ups!</strong> Vas unos nije dobar.<br><br>
    </div>
    @endif
    {!! Form::open(array('route' =>
    'usluge.store','method'=>'POST')) !!}
    @include('usluge.form')
    @endsection
