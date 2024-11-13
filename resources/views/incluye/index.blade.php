<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incluye</title>
    <link rel="stylesheet" href="{{ asset('css/view.css') }}">
</head>
<body>
    <h1>Incluye</h1>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Codigo</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Subtotal</th>
            <th>IVA</th>
            <th>Total</th>
            <th>
            <a href="{{ route('incluye.create') }}">
                <button type="button" ">ADD</button>
            </a>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($incluye as $item)
            <tr>
                <td>{{ $item->Pedidos_id}}</td>
                <td>{{ $item->Productos_codigo}}</td>
                <td>{{ $item->cantidad}}</td>
                <td>{{ $item->producto->precio }}</td>
                @php

                    $cantidad = (float) $item->cantidad;
                    $precio = (float) $item->producto->precio;
                    $cantidad = str_replace(',', '.', $cantidad);
                    $precio = str_replace(',', '.', $precio);
                    $subtotal = number_format($cantidad * $precio, 2);
                    $subtotal = str_replace(',', '', $subtotal);
                    $iva = number_format((float) $subtotal * .16, 2);
                    $total = number_format((float) $subtotal + (float) $iva, 2);
                @endphp
                <td>{{ $subtotal }}</td>
                <td>{{ $iva }}</td>
                <td>{{ $total }}</td>
                <td>
                    <a href="{{ route('incluye.edit', $item->id) }}">
                        <button>Modificar</button>
                    </a>
                </td>
                <td>
                    <form action="{{ route('incluye.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
