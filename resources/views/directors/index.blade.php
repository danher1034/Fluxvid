@extends('layout')

@section('title','Lista de directores')

@section('content')
    <h1>Listado de Directores</h1>
    @forelse ($directors as $director)
    <div>
        <h3><a href="{{route('directors.show',$director->id)}}">{{$director->name}}</a></h3>
        Nacionalidad: {{$director->nacionality}} <br>
        Fecha de nacimiento: {{$director->birthday}}
    </div>
    @empty

    @endforelse

@endsection
