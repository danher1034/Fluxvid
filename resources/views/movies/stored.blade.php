@extends('layout')

@section('title')

@endsection

@section('content')
    <h1>Se ha creado con exito</h1>
    <br>
    <br>
    <a href="{{route('movies.index')}}">Volver</a>
@endsection
