@extends('layout')

@section('title')
    <a href="{{route('movies.edit',$movie->id)}}">Editar película</a>
@endsection

@section('content')
    <h1>Ficha de la película: {{$movie->title}}</h1><br>
    Año de la película: {{$movie->year}} <br><br>
    Valoración: {{$movie->rating}} <br><br>
    <p>{{$movie->plot}}</p> <br><br>
    <form action="{{route('movies.destroy',$movie->id)}}" method="POST">
        @csrf
        @method('delete')
        <input type="submit" value="Eliminar">
    </form>
@endsection
