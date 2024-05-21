<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listar trucker</h1>

    @foreach ($truckers as $trucker)
    <tr>
        <br>
        <td>{{$trucker->nombre}}</td>
        <br>
        <td>{{$trucker->poblacion}}</td>
        <br>
        <td>{{$trucker->telefono}}</td>
        <br>
        <td>{{$trucker->direccion}}</td>
        <br>
        <td>{{$trucker->salario}}</td>
        <br>
        <td><a href="{{route('trucker.show',$trucker->id)}}">Mostrar</a></td>
        <td><a href="{{route('trucker.edit',$trucker->id)}}">Editar</a></td>

        <td>
        <form action="{{route('trucker.destroy',$trucker->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
        </form>

@endforeach
</body>
</html>
