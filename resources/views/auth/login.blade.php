@extends('layout')

@section('title','Registro')

@section('content')
    <form action="{{route('signup')}}" method="POST">
        @csrf

        <label for="username">Nombre de usuario: </label><br>
        <input type="text" name="username" id="username" value="{{old('username')}}"><br>

        <label for="password">Contraseña:</label><br>
        <input type="password" name="password" id="password"><br>

        <input type="submit" value="Enviar">
    </form>
@endsection
