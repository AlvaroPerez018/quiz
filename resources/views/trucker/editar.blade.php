<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Camionero</title>
</head>
<body>
    <form action="{{route('trucker.update', $trucker)}}"  method="POST" >

        @csrf
        @method('put')
        <label>
            Nombre:
            <br>
            <input name="nombre" type="text" value="{{ old('nombre', $trucker->nombre) }}">
            <br>
        </label>
        <br>
        <label>
            Poblacion:
            <br>
            <input name="poblacion" type="text" value="{{ old('poblacion', $trucker->poblacion) }}">
            <br>
        </label>
        <br>
        <label>
            Telefono:
            <br>
            <input name="telefono" type="number" value="{{ old('telefono', $trucker->telefono) }}">
            <br>
        </label>
        <br>
        <label>
            Dirección:
            <br>
            <input name="direccion" type="text" value="{{ old(' dirección', $trucker->dirección) }}">
            <br>
        </label>
        <br>

        <label>
            Salario:
            <br>
            <input name="salario" type="number" value="{{ old(' salario', $trucker->salario) }}">
            <br>
        </label>
        <br>

        <button  type="submit">Actualizar Camionero</button>
</body>
</html>
