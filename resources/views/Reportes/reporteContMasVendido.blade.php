<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>WB | Contenido Más Vendido</title>
    @vite(['../resources/css/nicepage.css', '../resources/css/reportes/reporteContMasVendido.css'])
    <script class="u-script" type="text/javascript" src="../jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../nicepage.js" defer=""></script>
</head>

<body>
    @include('components.pageHeader')
    <section class="u-clearfix u-image u-section-1" id="sec-e752">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-container-style u-group u-group-1">
                <div class="u-container-layout u-container-layout-1">
                    <h2 class="u-text u-text-default u-text-1">Contenido más vendido</h2>
                    <div class="u-form u-form-1">
                    <form action="{{ route('reportContMasVendido') }}" method="GET" class="u-clearfix u-form-spacing-45 u-form-vertical u-inner-form">
                        <div class="u-form-group u-form-group-1" style="display: flex; justify-content: space-between;">
                            <div class="u-form-date">
                                <label for="fecha_inicio" class="u-label">Fecha de Inicio</label>
                                <input type="date" id="fecha_inicio" name="fecha_inicio" class="u-grey-80 u-input u-input-rectangle u-input-1" value="{{ old('fecha_inicio', $fechaInicio ?? '') }}" required>
                            </div>
                            <div class="u-form-date">
                                <label for="fecha_fin" class="u-label">Fecha de fin</label>
                                <input type="date" id="fecha_fin" name="fecha_fin" class="u-grey-80 u-input u-input-rectangle u-input-2" value="{{ old('fecha_fin', $fechaFin ?? '') }}" required>
                            </div>
                        </div>
                        <div class="u-align-center u-form-group u-form-submit">
                            <button type="submit" class="u-black u-border-none u-btn u-btn-submit u-button-style u-btn-1">Mostrar contenido más vendido</button>
                        </div>
                    </form>
                    </div>

                    <!-- Tabla con los productos más vendidos -->
                    @if(isset($productosMasVendidos) && $productosMasVendidos->count() > 0)
                    <div class="u-table-responsive u-table-1" style="margin-top: 30px; text-align: center;">
                        <table border="1" cellpadding="5" cellspacing="0" bgcolor="black" style="margin: 0 auto;">
                            <thead>
                                <tr>
                                    <th style="color: white;">Producto</th>
                                    <th style="color: white;">Cantidad Vendida</th>
                                    <th style="color: white;">Precio</th>
                                    <th style="color: white;">Fecha de Venta</th> <!-- Nueva columna -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($productosMasVendidos as $producto)
                                <tr>
                                    <td style="color: white;">{{ $producto->nom_producto }}</td>
                                    <td style="color: white;">{{ $producto->cantidad_vendida }}</td>
                                    <td style="color: white;">{{ $producto->precio_producto }}</td>
                                    <td style="color: white;">{{ \Carbon\Carbon::parse($producto->fecha_venta)->format('d/m/Y') }}</td> <!-- Formatear la fecha -->
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div style="text-align: center; margin-top: 20px;">
                        <button onclick="window.print()" class="u-black u-border-none u-btn u-btn-rectangle u-button-style">Imprimir Tabla</button>
                    </div>
                    @else
                    <p style="color: red; text-align: center;">No se encontraron productos en este rango de fechas.</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
    @include('components.pageFooter')
</body>

</html>
