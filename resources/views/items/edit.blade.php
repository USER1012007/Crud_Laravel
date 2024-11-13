
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Item</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>
    <h1>Editar Compania de Envio</h1>

    <form action="{{ route('items.update', $item->clave) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="clave">Clave:</label>
        <input type="text" id="clave" name="clave" value="{{ $item->clave }}" required>

        <label for="descripcion">Descripcion:</label>
        <input type="text" id="descripcion" name="descripcion" value="{{ $item->descripcion }}" required>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
