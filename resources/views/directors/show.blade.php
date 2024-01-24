@extends('layout')

@section('title')
    <h1>Show de directors: {{$director->name}}</h1>

    Nacionalidad: {{$director->nationality}} <br>
    Fecha de nacimiento: {{$director->birthday}} <br><br>
    Peliculas:<br><br>
    @foreach ($director->movies as $movie)
        <a href="{{route('movies.show', $movie)}}">{{$movie->title}}</a> <br>
        Año de lanzamiento:{{$movie->year}} <br><br>
    @endforeach
@endsection

@section('content')
@endsection
