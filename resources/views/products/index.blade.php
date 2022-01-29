<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    <div class="table-responsive">
        <a href="{{ route('products.create') }}">Crear Producto</a>
        <table class="table table-striped table-sm">
            <thead class="thead-light">
                <tr>
                    <th> ID</th>
                    <th> Nombre </th>
                    <th> Precio </th>
                    <th> Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <td>1</td>
                <td>tomate</td>
                <td>$150</td>
                <td>10 Kg</td>
                <td>Comprar</td>
            </tbody>
        </table>
    </div>
</body>
</html>