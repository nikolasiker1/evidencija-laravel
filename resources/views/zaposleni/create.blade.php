@extends('layout')
@section('content')
<h4 class="text-center mt-4">Novi zaposleni</h4>
{!! Form::open(array('route' =>
'zaposleni.store','method'=>'POST')) !!}
@include('zaposleni.form')
@endsection
