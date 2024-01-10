<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="characters">
        @foreach ($characters as $character) {{-- para recorrer el array characters --}}
            <div class="character">
                <h3>{{$character['name']}}</h3><br>
                <div>
                    Alias: {{ $character['alias'] ?? 'Desconocido'}} <br><br> {{-- colocara el alias o en caso de no existir podra desconocido --}}
                    Película: {{ $character['movie'] ?? 'Desconocida'}}<br><br>
                    Edad: {{ $character['age'] ?? 'Desconocida'}}<br><br>
                    Especie: {{ $character['species'] ?? 'Desconocida'}}<br><br>
                    Genero: {{ $character['gender'] ?? 'Desconocido'}}<br><br>
                </div>
                <img class="img_character" src={{$character['img']}} alt={{$character['name']}}> {{-- colocara la imagen --}}
            </div>
        @endforeach
    </div>
</body>
</html>
