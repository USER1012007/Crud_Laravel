
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar productos</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>
    <h1>productos</h1>

    <form action="{{ route('productos.update', $productos->codigo) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="codigo">codigo:</label>
        <input type="number" id="codigo" name="codigo" value="{{ $productos->codigo }}" required>

        <label for="descripcion">descripcion:</label>
        <input type="text" id="descripcion" name="descripcion" value="{{ $productos->descripcion }}" required>

        <label for="precio">precio:</label>
        <input type="number" id="precio" name="precio" value="{{ $productos->precio }}" required step="0.00000001">

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
