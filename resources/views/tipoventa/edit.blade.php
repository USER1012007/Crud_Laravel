
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar tipoventa</title>
        <label for="descripcion">descripcion:</label>
</head>
<body>
    <h1>tipoventa</h1>

    <form action="{{ route('tipoventa.update', $tipoventa->tipo) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="tipo">tipo: {{ $tipoventa->tipo }}</label>
        <label for="descripcion">descripcion:</label>
        <input type="text" id="descripcion" name="descripcion" value="{{ $tipoventa->descripcion }}" required>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
