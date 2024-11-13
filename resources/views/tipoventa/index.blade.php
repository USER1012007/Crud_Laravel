<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items</title>
    <link rel="stylesheet" href="{{ asset('css/view.css') }}">
</head>
<body>
    <h1>Tipo de Venta</h1>
    <table>
        <thead>
            <tr>
                <th>Tipo</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tipoventa as $item)
                <tr>
                    <td>{{ $item->tipo }}</td>
                    <td>{{ $item->descripcion }}</td>
                    <td>
                        <a href="{{ route('tipoventa.edit', $item->tipo) }}">
                            <button>Modificar</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
