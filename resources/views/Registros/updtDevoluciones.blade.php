<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Devoluciones</title>
</head>

<body>
    <div>
        <form action="">
            {{ csrf_field() }}
            <table class="reporte-table">
                <thead>
                    <tr>
                        <th>Id Venta</th>
                        <th>Id Producto</th>
                        <th>Cantidad de devoluciones</th>
                        <th>Cantidad comprada</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($ventasDetalles as $vdt)

                    <tr>
                        <td>{{ $vdt->id_venta }}</td>
                        <td>{{ $vdt->id_producto }}</td>
                        <td>{{ $vdt->cant_devueltas}}</td>
                        <td>{{ $vdt->cantidad }}</td>
                    </tr>

                    @endforeach
                </tbody>
                <tr>

                </tr>
            </table>
        </form>

    </div>
</body>

</html>