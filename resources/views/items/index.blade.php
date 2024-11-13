<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items</title>
    <link rel="stylesheet" href="{{ asset('css/view.css') }}">
</head>
<body>
    <h1>Centro de distribucion</h1>
    <table>
        <thead>
            <tr>
                <th>Clave</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @php $counter = 1; @endphp
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->clave}}</td>
                    <td>{{ $item->descripcion }}</td>
                    <td>
                        <a href="{{ route('items.edit', $item->clave) }}">
                            <button>Modificar</button>
                        </a>
                    </td>
                </tr>
                @php $counter++; @endphp
            @endforeach
        </tbody>
    </table>
</body>
</html>
