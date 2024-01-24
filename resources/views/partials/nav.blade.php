<nav>
    <a href="/">Inicio</a>
    <br>
    <a href="/movies">Listado películas</a>

</nav>
<form action="{{route('directors.nationality')}}" method="POST">
    @csrf
    <select name="country" id="director">
        <option value="selecciona">Selecciona un pais</option>
        @foreach ($nationalitys as $nationality)
            <option value="{{$nationality}}">{{$nationality}}</option>
        @endforeach
    </select>
    <input type="submit" value="Mostrar por país">
</form>
