<!--
    Descripción: Página para eliminar categorías. Permite seleccionar una categoría y confirmarla para eliminarla. Además, muestra un mensaje de confirmación y error mediante modales.
    Autor: Irma Mireya Castro Carranza
-->
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>eliminar_categorias</title>
    @vite(['../resources/css/nicepage.css', '../resources/css/catalogos/eliminarCategoria.css'])
    <script class="u-script" type="text/javascript" src="../../jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../../nicepage.js" defer=""></script>
</head>
<body data-path-to-root="../../" data-include-products="true" class="u-body u-xl-mode" data-lang="es">
    @include('components.pageHeader')
  
    <section class="u-clearfix u-image u-section-1" id="sec-6dc8" data-image-width="626" data-image-height="391">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="{{ route('catalogoCategoria') }}" class="u-border-1 u-border-active-grey-40 u-border-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-body-color u-btn-1">Regresar </a>
            <div class="u-align-center u-container-style u-group u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="0">
                <div class="u-container-layout">
                    <h2 class="u-text u-text-default u-text-1">Eliminar Categorías </h2>

                    <!-- Mostrar mensaje de sesión como modal -->
                    @if(session('mensaje'))
                        <div id="modalMensaje" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); display: flex; justify-content: center; align-items: center; z-index: 1000;">
                            <div style="background: white; padding: 20px; border-radius: 10px; text-align: center; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                                <p>{{ session('mensaje') }}</p>
                                <button onclick="cerrarModal()" style="background: black; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Cerrar</button>
                            </div>
                        </div>
                    @endif

                    <div class="u-form u-form-1">
                    <form action="{{ route('deleteCategoria') }}" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px;">
                            @csrf <!-- Protege el formulario contra ataques CSRF -->
                            <div class="u-form-group u-form-name">
                                <label for="id_categoria" class="u-label u-text-black u-label-1">Seleccione Categoría</label>
                                <select class="form-select u-grey-80 u-input u-input-rectangle" name="id_categoria" id="id_categoria" required>
                                    <option value="" style="background-color: rgba(255, 255, 255, 0.8); color: #000;">Seleccione una categoría</option>

                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->id_categoria }}">{{ $categoria->id_categoria }} - {{ $categoria->nom_categoria }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="u-align-center u-form-group u-form-submit">
                                <button type="button" class="u-black u-border-2 u-border-grey-40 u-btn u-btn-submit u-button-style" onclick="confirmarEliminacion()">Eliminar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal de confirmación de eliminación -->
    <div id="modalConfirmacion" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); display: none; justify-content: center; align-items: center; z-index: 2000;">
        <div style="background: white; padding: 20px; border-radius: 10px; text-align: center; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
            <p>¿Estás seguro de que deseas eliminar esta categoría?</p>
            <button onclick="eliminarCategoria()" style="background: red; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Sí, eliminar</button>
            <button onclick="cerrarConfirmacion()" style="background: black; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Cancelar</button>
        </div>
    </div>

    <!-- Script para mostrar y ocultar el modal de confirmación -->
    <script>
        function confirmarEliminacion() {
            document.getElementById('modalConfirmacion').style.display = 'flex';
        }

        function cerrarConfirmacion() {
            document.getElementById('modalConfirmacion').style.display = 'none';
        }

        function eliminarCategoria() {
            document.querySelector('form').submit();
        }

        function cerrarModal() {
            const modal = document.getElementById('modalMensaje');
            modal.style.display = 'none';
        }
    </script>

    @include('components.pageFooter')  
</body>
</html>
