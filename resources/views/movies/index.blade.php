@extends('layout')

@section('title','Lista de productos')

@section('content')
    <h1>Listado de películas</h1>
    @forelse ($movies as $movie)
    <div>
        <h3><a href="{{route('movies.show', $movie)}}">{{$movie->title}}</a></h3>
    </div>
    @empty

    @endforelse

    {{$movies->links()}}
@endsection




