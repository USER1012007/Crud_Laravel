
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>anadir pedidos</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>
    <h1>pedidos</h1>

        <form action="{{ route('incluye.store') }}" method="POST">
        @csrf
        <label for="id">ID</label>
        <select id="id" name="id" required>
            @foreach($pedidos as $pedidoId)
                <option value="{{ $pedidoId }}">{{ $pedidoId }}</option>
            @endforeach
        </select>

        <label for="Productos_codigo">Productos_codigo (Productos_codigo):</label>
        <select id="Productos_codigo" name="Productos_codigo" required>
            @foreach($productos_codigos as $codigo)
                <option value="{{ $codigo }}">{{ $codigo }}</option>
            @endforeach
        </select>

        <label for="cantidad">Cantidad (Float):</label>
        <input type="number" id="cantidad" name="cantidad" step="0.0000001" required>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
