<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['../resources/css/nicepage.css', '..\resources\css\Reportes\reportes\reporteEstilo.css'])
    <title>reporteHistorialCompras</title>
</head>

<body>
    @include('components.pageHeader')
        <div class="reporte-section ">
            <div class="reporte-sheet">
                <h2 class="reporte-title">Historial de Compras</h2>
                <a href="{{ route('historialCommpras') }}"
                class="u-border-1 u-border-active-grey-40 u-border-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-body-color u-btn-1">Regresar
                </a>
                <table class="reporte-table">
                    <thead>
                        <tr>
                            <th>ID Cliente</th>
                            <th>Cliente</th>
                            <th>Cantidad de Compras</th>
                            <th>Total de Compra</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reporte as $item)
                        <tr>
                            <td>{{ $item->id_cliente }}</td>
                            <td>{{ $item->nombre_completo }}</td>
                            <td>{{ $item->cantidad_ventas }}</td>
                            <td>${{ number_format($item->total_acumulado, 2) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('components.pageFooter')
</body>

</html>0