@extends('layout')

@section('title','Lista de directores por pais')

@section('content')
    <h1>Listado de Directores por pais</h1>
    <br>
    <h2>{{$country}}</h2>
    @forelse ($directors as $director)
    <div>
        Name: {{$director->name}} <br><br>
        Peliculas:
        @forelse ($director->movies as $movie)
        <div>
            {{$movie->title}}
        </div>
        @empty
            No tiene películas
        @endforelse <br><br><br>
    </div>
    @empty
       No hay directores

    @endforelse

@endsection



