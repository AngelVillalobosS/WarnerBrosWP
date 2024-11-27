<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>registrar_ventas</title>
    @vite(['../resources/css/nicepage.css', '../resources/css/registros/registrarVenta.css'])
    <script class="u-script" type="text/javascript" src="../jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 7.0.3, nicepage.com">
    <meta name="theme-color" content="#478ac9">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
</head>

<body data-path-to-root="../" data-include-products="true" class="u-body u-xl-mode" data-lang="es">
    @include('components.pageHeader')

    <form action="{{ route('registerVenta') }}" method="POST" id="form-venta">
    @csrf  <!-- Asegúrate de incluir el token CSRF para la seguridad -->
    
    <section class="u-clearfix u-image u-section-1" id="sec-b4c2" data-image-width="626" data-image-height="391" style="display: flex; align-items: center; justify-content: center; min-height: 100vh; box-sizing: border-box;">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1" style="width: 100%; max-width: 1200px; padding: 30px; background: transparent; border: 2px solid rgba(0, 0, 0, 0.2); border-radius: 10px;">
            <h2 class="u-text u-text-default u-text-1" style="text-align: center; color: black;">Registrar Ventas</h2>

          <!-- Modal de Mensaje -->
            @if(session('mensaje'))
                <div id="modalMensaje" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); display: flex; justify-content: center; align-items: center; z-index: 1000;">
                    <div style="background: white; padding: 20px; border-radius: 10px; text-align: center; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                        <p>{{ session('mensaje') }}</p>
                        <!-- Redirigir a la misma página cuando se cierra el modal -->
                        <button onclick="location.reload();" style="background: black; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Cerrar</button>
                    </div>
                </div>
            @endif


            <div class="u-form u-form-1">
                <!-- Submenú -->
                <div class="u-form-group u-form-partition-factor-1" style="margin-bottom: 20px;">
                    <label for="select-client" class="u-label" style="color: black;">Seleccionar cliente</label>
                    <select id="select-client" name="id_cliente" class="u-grey-80 u-input u-input-rectangle u-input-1"  style="width: 100%; padding: 12px;">
                        @foreach ($clientes as $cliente)
                            <option value="{{ $cliente->id_cliente }}">{{ $cliente->nombre_cliente }} {{ $cliente->ap_cliente }} {{ $cliente->am_cliente }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="u-form-date u-form-group u-form-partition-factor-1" style="margin-bottom: 20px;">
                    <label for="date-venta" class="u-label" style="color: black;">Fecha</label>
                    <input type="date" id="date-venta" name="fecha_venta" class="u-grey-80 u-input u-input-rectangle u-input-2"  style="width: 100%; padding: 12px;">
                </div>

                <!-- Fila con tres columnas para Producto, Cantidad y Botón -->
                <div class="u-form-row" style="display: flex; gap: 20px; margin-bottom: 20px;">
                    <!-- Producto -->
                    <div style="flex-grow: 1;">
                        <label for="select-producto" class="u-label" style="color: black;">Producto</label>
                        <select id="select-producto" name="productos[0][id_producto]" class="u-grey-80 u-input u-input-rectangle u-input-3"  style="width: 100%; padding: 12px;">
                            @foreach ($productos as $producto)
                                <option value="{{ $producto->id_producto }}" data-precio="{{ $producto->precio_producto }}" data-cantidad="{{ $producto->cant_inventario }}">
                                    {{ $producto->nom_producto }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Cantidad -->
                    <div style="flex-grow: 1;">
                        <label for="cantidad-producto" class="u-label" style="color: black;">Cantidad</label>
                        <input type="number" id="cantidad-producto" name="productos[0][cantidad]" value='0' class="u-grey-80 u-input u-input-rectangle u-input-4"  style="width: 100%; padding: 12px;">
                    </div>
                </div>

                <!-- Botón Agregar colocado en su propia fila -->
                <div class="u-form-group u-form-partition-factor-1 u-align-center" style="margin-bottom: 20px; display: flex; justify-content: center;">
                    <button type="button" id="agregar-venta" class="u-btn u-black u-btn-submit u-button-style" style="padding: 12px 24px;">Agregar</button>
                </div>

                <!-- Tabla -->
                <div class="u-table" style="margin-top: 20px; width: 100%;">
                    <table class="u-table-entity" style="width: 100%; color: white; border-collapse: collapse; table-layout: fixed; border: 1px solid white; background-color: black;">
                        <thead>
                            <tr>
                                <th style="padding: 10px; border: 1px solid white; text-align: left;">Fecha</th>
                                <th style="padding: 10px; border: 1px solid white; text-align: left;">Cliente</th>
                                <th style="padding: 10px; border: 1px solid white; text-align: left;">Producto</th>
                                <th style="padding: 10px; border: 1px solid white; text-align: left;">Cantidad</th>
                                <th style="padding: 10px; border: 1px solid white; text-align: left;">Total del producto</th>
                            </tr>
                        </thead>
                        <tbody id="tabla-ventas">
                            <!-- Se llenará dinámicamente -->
                        </tbody>
                    </table>
                </div>

                <!-- Total -->
                <div class="u-align-right u-form-group" style="margin-top: 20px; color: black;">
                    <h3>Total: $<span id="total-ventas">0.00</span></h3>
                </div>

                <!-- Guardar Ventas -->
                <div class="u-align-center u-form-group u-form-submit" style="margin-top: 20px;">
                    <button type="submit" class="u-btn u-black u-btn-submit u-button-style" style="padding: 12px 24px;">Guardar Ventas</button>
                </div>
                
                <!-- Campos ocultos para enviar los productos al backend -->
                <input type="hidden" name="productos_json" id="productos_json">
            </div>
        </div>
    </section>
</form>

@include('components.pageFooter')

<script>
        let productosArray = [];
        let totalAcumulado = 0;

        // Agregar producto
        document.getElementById('agregar-venta').addEventListener('click', function () {
    const cliente = document.getElementById("select-client").value;
    const fecha = document.getElementById("date-venta").value;
    const producto = document.getElementById("select-producto");
    const cantidad = parseInt(document.getElementById("cantidad-producto").value);
    const precio = parseFloat(producto.options[producto.selectedIndex].getAttribute('data-precio'));
    const inventario = parseInt(producto.options[producto.selectedIndex].getAttribute('data-cantidad'));

    // Validar inventario suficiente
    if (cantidad > inventario) {
        alert(`No hay suficiente inventario para el producto seleccionado. Disponible: ${inventario}`);
        return; // Detener la ejecución si no hay suficiente inventario
    }

    if (cliente && fecha && producto.value && cantidad > 0) {
        const totalProducto = precio * cantidad;
        totalAcumulado += totalProducto;

        const tabla = document.getElementById("tabla-ventas");
        const nuevaFila = tabla.insertRow();

        nuevaFila.innerHTML = `
            <td>${fecha}</td>
            <td>${cliente}</td>
            <td>${producto.options[producto.selectedIndex].text}</td>
            <td>${cantidad}</td>
            <td>${totalProducto.toFixed(2)}</td>
        `;

        productosArray.push({ cliente, fecha, id_producto: producto.value, cantidad, totalProducto });
        document.getElementById("productos_json").value = JSON.stringify(productosArray);
        document.getElementById("total-ventas").textContent = totalAcumulado.toFixed(2);
    } else {
        alert("Complete todos los campos correctamente.");
    }
});

        // Validar antes de enviar
        document.getElementById('form-venta').addEventListener('submit', function (e) {
            if (productosArray.length === 0) {
                e.preventDefault();
                
            }
        });


    </script>

</body>
</html>
