<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($autor)
        <h1>Detalles del autor con codigo {{$autor->codigo_autor}}</h1>
        <table>
            <tr>
                <td>Nombre</td>
                <td>{{$autor->nombre_autor}}</td>
            </tr>
            <tr>
                <td>Nacionalidad</td>
                <td>{{$autor->nacionalidad}}</td>
            </tr>
        </table>
    @else
        <h1>No existe un libro con este codigo</h1>
    @endif
</body>
</html>