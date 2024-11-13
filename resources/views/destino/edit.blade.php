
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar destino</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>
    <h1>Destino</h1>

    <form action="{{ route('destino.update', $destino->clave) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="clave">Clave:</label>
        <input type="text" id="clave" name="clave" value="{{ $destino->clave }}" required>

        <label for="descripcion">Descripcion:</label>
        <input type="text" id="descripcion" name="descripcion" value="{{ $destino->descripcion }}" required>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
