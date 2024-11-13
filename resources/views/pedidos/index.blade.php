
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items</title>
    <link rel="stylesheet" href="{{ asset('css/view.css') }}">
</head>
<body>
    <h1>Companias de envio</h1>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Productos codigo</th>
            <th>TipoVenta tipo</th>
            <th>Distribucion clave</th>
            <th>
            <a href="{{ route('pedidos.create') }}">
                <button type="button" ">ADD</button>
            </a>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pedidos as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->Destino_clave }}</td>
                <td>{{ $item->TipoVenta_tipo }}</td>
                <td>{{ $item->C_Distribucion_clave}}</td>
                <td>
                    <form action="{{ route('pedidos.destroy', $item->id) }}" method="POST">
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
