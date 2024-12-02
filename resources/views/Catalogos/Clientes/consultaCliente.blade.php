<!-- Autor: Angel Gabriel Villalobos Saucedo -->
<!-- Descripción: Estructura de la vista de la consulta de clientes -->
<!-- Fecha de Creación:  Jueves 14, Noviembre 2024 -->
<!-- Ultima modificación: Miercoles 27, Noviembre 2024 -->
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
                <h2 class="reporte-title">Clientes registrados</h2>
                <a href="{{ route('catalogoCliente') }}"
                class="u-border-1 u-border-active-grey-40 u-border-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-body-color u-btn-1">Regresar
                </a>
                <table class="reporte-table">
                    <thead>
                        <tr>
                            <th>Id Cliente</th>
                            <th>Nombre Completo</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reporte as $item)
                        <tr>
                            <td>{{ $item->id_cliente }}</td>
                            <td>{{ $item->nombre_completo }}</td>
                            <td>{{ $item->telefono }}</td>
                            <td>{{ $item->correo }}</td>
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