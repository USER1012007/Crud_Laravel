
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar incluye</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>
<style>

</style>
    <h1>incluye</h1>

    <form action="{{ route('incluye.update', $incluye->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="Pedidos_id">Pedidos_id:</label>
        <label for="Pedidos_id">{{ $incluye->Pedidos_id }}</label>

        <label for="Productos_codigo">Productos_codigo:</label>
        <label for="Productos_codigo">{{ $incluye->Productos_codigo }}</label>

        <label for="cantidad">cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" value="{{ $incluye->cantidad }}" required step="0.00000001">

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
