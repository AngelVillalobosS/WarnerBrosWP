<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>modificar_categoriasFunct</title>
    @vite(['../resources/css/nicepage.css', '../resources/css/catalogos/modificarCliente.css'])
    @vite(['../resources/js/nicepage.js'])
    <meta name="generator" content="Nicepage 7.0.3, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
</head>

<body data-path-to-root="../../" data-include-products="true" class="u-body u-xl-mode" data-lang="es">
    @include('components.pageHeader')

    <section class="u-clearfix u-image u-section-1" id="sec-4f8f" data-image-width="626" data-image-height="391">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="{{ route('modificarCliente') }}"
                class="u-border-1 u-border-active-grey-40 u-border-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-body-color u-btn-1">Regresar
            </a>
            <div class="u-align-center u-container-style u-group u-group-1" data-animation-name="customAnimationIn"
                data-animation-duration="1000" data-animation-delay="0">
                <div class="u-container-layout">
                    <h2 class="u-text u-text-default u-text-data">Modificar Datos del cliente </h2>

                    <!-- Mostrar mensaje de sesión aquí -->
                    @if(session('mensaje'))
                    <div class="u-alert u-alert-success" role="alert">
                        {{ session('mensaje') }}
                    </div>
                    @endif

                    <div class="u-form u-form-1">
                        <form action="{{ route('actualizarCliente') }}" method="POST"
                            class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px;">
                            @csrf
                            <div class="u-form-group u-form-partition-factor-2">
                                <label class="u-label u-text-black u-label-1">ID</label>
                                <input type="text" name="id_cliente" class="u-grey-75 u-input u-input-rectangle"
                                    required="required" readonly='' value="{{ $id_cliente }}">
                            </div>
                            <div class="u-form-group u-form-partition-factor-2">
                                <label class="u-label u-text-black u-label-2">Nombre</label>
                                <input type="text" placeholder="Introduzca el nombre" "
                                    name=" nombre_cliente" class="u-grey-75 u-input u-input-rectangle"
                                    required="required" value="{{ $nombre_cliente }}">
                            </div>
                            <div class="u-form-group u-form-partition-factor-2 u-form-group-3">
                                <label class="u-label u-text-black u-label-3">Apellido Paterno</label>
                                <input type="text" placeholder="Introduzca el apellido paterno" name="ap_cliente"
                                    class="u-grey-75 u-input u-input-rectangle" value="{{ $ap_cliente }}">
                            </div>
                            <div class="u-form-group u-form-partition-factor-2 u-form-group-4">
                                <label class="u-label u-text-black u-label-4">Apellido Materno</label>
                                <input type="text" placeholder="Introduzca el apellido materno" name="am_cliente"
                                    class="u-grey-75 u-input u-input-rectangle" value="{{$am_cliente}}">
                            </div>
                            <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-5">
                                <label class="u-label u-text-black u-label-5">Teléfono</label>
                                <input type="tel" placeholder="XXX XXX XXXX" name="telefono"
                                    class="u-grey-75 u-input u-input-rectangle" data-country-code="mx" value="{{$telefono}}">
                            </div>
                            <div class="u-form-email u-form-group u-form-partition-factor-2 u-form-group-6">
                                <label class="u-label u-text-black u-label-6">Correo Electrónico
                                </label>
                                <input type="email" name="correo" class="u-grey-75 u-input u-input-rectangle"
                                    placeholder="correo@gmail.com" value="{{$correo}}">
                            </div>
                            <div class="u-align-center u-form-group u-form-submit">
                                <input type="submit" value="Actualizar Datos"
                                    class="u-black u-border-2 u-border-active-grey-40 u-border-grey-40 u-border-hover-grey-40 u-btn u-btn-submit u-button-style u-btn-2">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('components.pageFooter')
</body>

</html>