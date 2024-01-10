@extends('layout')

@section('title','Lista de directores por pais')

@section('content')
    <h1>Listado de Directores por pais</h1>
    <br>
    <h3>{{$country}}</h3>
    @forelse ($directors as $director)
    <div>
        Name: {{$director->name}}
    </div>
    @empty

    @endforelse
@endsection


