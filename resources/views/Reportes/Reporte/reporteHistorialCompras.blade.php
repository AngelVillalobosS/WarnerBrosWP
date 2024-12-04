<!-- Autor: Angel Gabriel Villalobos Saucedo -->
<!-- Descripción: Estructura de la vista donde se muestra el reporte del historial de ventas basado en fechas -->
<!-- Fecha de Creación:  Jueves 14, Noviembre 2024 -->
<!-- Ultima modificación: Miercoles 27, Noviembre 2024 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['../resources/css/nicepage.css', '..\resources\css\Reportes\reportes\reporteEstilo.css'])
    <title>reporteHistorialCompras</title>
    <style>
        .action-buttons {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin: 20px 0;
        }
        .action-buttons button:hover {
            background-color: #45a049;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        
    </style>
</head>

<body>
    @include('components.pageHeader')
    <div class="reporte-section ">
        <div class="reporte-sheet">
            <h2 class="reporte-title">Historial de Compras</h2>
            <a href="{{ route('historialCommpras') }}"
                class="u-border-1 u-border-active-grey-40 u-border-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-body-color u-btn-1">Regresar
            </a>
            <div class="action-buttons">
            <button
                class="u-border-1 u-border-active-grey-40 u-border-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-body-color u-btn-1"
                onclick="window.print()">Imprimir Historial de Compras</button>
            </div>  
            <table class="reporte-table">
                <thead>
                    <tr style="background-color: #222;">
                        <th style="background-color: #222; color: #fff;">ID Cliente</th>
                        <th style="background-color: #222; color: #fff;">Cliente</th>
                        <th style="background-color: #222; color: #fff;">Cantidad de Compras</th>
                        <th style="background-color: #222; color: #fff;">Total de Compra</th>
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