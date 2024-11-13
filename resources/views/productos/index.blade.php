

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items</title>
    <link rel="stylesheet" href="{{ asset('css/view.css') }}">
</head>
<body>
    <h1>Productos</h1>
<table>
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Descripcion</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $item)
           <tr>
              <td> {{ $item->codigo }} </td>
              <td> {{ $item->descripcion }} </td>
              <td> {{ $item->precio }} </td>
              <td>
                  <a href="{{ route('productos.edit', $item->codigo) }}">
                      <button>Modificar</button>
                  </a>
              </td>
           <tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
