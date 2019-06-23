@extends('layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Izmeni uslugu</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('usluge.index') }}"> Nazad</a>
        </div>
    </div>
</div>
@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Ups!</strong> Vas unos nije dobar.<br><br>
</div>
@endif
{!! Form::model($usluga, ['method' => 'PATCH','route' =>
['usluge.update', $usluga->id]]) !!}
@include('usluge.form')
{!! Form::close() !!}
@endsection
