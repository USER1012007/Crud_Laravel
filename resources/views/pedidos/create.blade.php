
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

        <form action="{{ route('pedidos.store') }}" method="POST">
        @csrf
        <label for="Destino_clave">Destino_clave:</label>
        <input type="text" id="Destino_clave" name="Destino_clave" value="{{ $pedidos->Destino_clave }}" required>

        <label for="TipoVenta_tipo">TipoVenta_tipo:</label>
        <input type="number" id="TipoVenta_tipo" name="TipoVenta_tipo" pattern="^(1|4|16|27)$" value="{{ $pedidos->TipoVenta_tipo }}" required>

        <label for="C_Distribucion_clave">C_Distribucion_clave:</label>
        <input type="text" id="C_Distribucion_clave" name="C_Distribucion_clave" value="{{ $pedidos->C_Distribucion_clave }}" required >

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
