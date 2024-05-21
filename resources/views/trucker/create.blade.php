<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Camionero</title>
</head>
<body>
<h1>Crear Camionero</h1>

<form action="{{route('truckers.store')}}" method="POST" enctype="multipart/form-data">

    @csrf
    @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>

        <label for="poblacion">Población:</label>
        <input type="text" id="poblacion" name="poblacion" required>
        <br><br>

        <label for="telefono">Teléfono:</label>
        <input type="number" id="telefono" name="telefono" required>
        <br><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required>
        <br><br>

        <label for="salario">Salario:</label>
        <input type="number" id="salario" name="salario" required>
        <br><br>

        <input type="submit" value="Crear Conductor de Camión">
    </form>


</body>
</html>
