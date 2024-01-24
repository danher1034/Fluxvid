@extends('layout')

@section('title')
    <a href="{{route('movies.create')}}">Crear película</a>
    <h1>Listado de películas</h1>
@endsection

@section('content')

    @forelse ($movies as $movie)
    <div>
        <h3><a href="{{route('movies.show', $movie)}}">{{$movie->title}}</a></h3>
        <h3>Director:<a href="{{route('directors.show',$movie->director->id)}}">{{$movie->director->name}}</a></h3> <br>
    </div>
    @empty

    @endforelse

    {{$movies->links()}}
@endsection




