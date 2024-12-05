<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['../resources/css/nicepage.css', '../resources/css/Reportes/reportes/reporteEstilo.css'])
    <title>Guardar Devoluciones</title>
</head>

<body>
    @include('components.pageHeader')
    <div>
        <div class="reporte-section">
            <div class="reporte-sheet">
                <h2 class="reporte-title">Devolución de Productos</h2>
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error')}}
                </div>
                @endif

                <a href="{{ route('registrarDevolucion') }}"
                    class="u-border-1 u-border-active-grey-40 u-border-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-body-color u-btn-1">Regresar
                </a>
                <form action="{{ route('devolucionesUpdate') }}" method="POST">
                    @csrf
                    <table class="reporte-table">
                        <thead>
                            <tr>
                                <th>Id Venta</th>
                                <th>Id Producto</th>
                                <th>Cantidad de devoluciones</th>
                                <th>Cantidad comprada</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ventasDetalles as $vdt)
                            <tr>
                                <td>
                                    {{ $vdt->id_venta }}
                                    <input type="hidden" name="id_venta" value="{{ $vdt->id_venta }}">
                                </td>
                                <td>
                                    {{ $vdt->id_producto }}
                                    <input type="hidden" name="id_producto" value="{{ $vdt->id_producto }}">
                                </td>
                                <td>
                                    <input class="input-frame" type="text" name="cant_devuelta"
                                        value="{{ $vdt->cant_devueltas }}">
                                </td>
                                <td>{{ $vdt->cantidad }}</td>
                                <td>
                                    <button type="submit" class="submit-btn">Actualizar</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>


            </div>
        </div>
    </div>
    <br>
    @include('components.pageFooter')
</body>
<script>
document.querySelector('form').addEventListener('submit', function(event) {
    let valid = true;

    document.querySelectorAll('tr').forEach(row => {
        const cant_devuelta = row.querySelector('input[name="cant_devuelta"]').value;
        const cantidad = row.querySelector('input[name="cantidad"]').value;

        if (parseInt(cant_devuelta) > parseInt(cantidad)) {
            valid = false;
            alert(
                `La cantidad devuelta (${cant_devuelta}) no puede ser mayor que la cantidad comprada (${cantidad}).`
            );
        }
    });

    if (!valid) {
        event.preventDefault(); // Evitar que el formulario se envíe
    }
});
</script>

</html>