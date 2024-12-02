<!-- Autor: Angel Gabriel Villalobos Saucedo -->
<!-- Descripción: Estructura de la vista de busqueda para modificar un cliente -->
<!-- Fecha de Creación:  Jueves 14, Noviembre 2024 -->
<!-- Ultima modificación: Miercoles 27, Noviembre 2024 -->

<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    @vite(['../resources/css/nicepage.css', '../resources/css/Catalogos/modificarCliente.css'])
    @vite(['../resources/js/nicepage.js'])
    <meta name="generator" content="Nicepage 7.0.3, nicepage.com">
    <meta name="referrer" content="origin">
    <link ogle-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "Cinematografia",
        "logo": "https://static.wixstatic.com/media/1c9a31_9c52ca01cb8749ccbddfff96429766a4~mv2.png/v1/fill/w_90,h_90,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/WarnerBros_Logo_1-1.png"
    }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="modificar_clientes">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
    <title>modificar_clientes</title>
</head>

<body data-path-to-root="../../" data-include-products="true" class="u-body u-xl-mode" data-lang="es">
    @include('components.pageHeader')

    <section class="u-clearfix u-image u-section-1" data-image-width="626" data-image-height="391">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="{{ route('catalogoCliente') }}"
                class="u-border-1 u-border-active-grey-40 u-border-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-body-color u-btn-1">Regresar
            </a>
            <div class="u-align-center u-container-style u-group u-group-1" data-animation-name="customAnimationIn"
                data-animation-duration="1000" data-animation-delay="0">
                <div class="u-container-layout">
                    <h2 class="u-text u-text-default u-text-1">Modificar Clientes </h2>
                    <!-- Mostrar mensaje de sesión como modal -->
                    @if(session('mensaje'))
                        <div id="modalMensaje" style="
                            position: fixed;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background: rgba(0, 0, 0, 0.5);
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            z-index: 1000;">
                            <div style="
                                background: white;
                                padding: 20px;
                                border-radius: 10px;
                                text-align: center;
                                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                                <p>{{ session('mensaje') }}</p>
                                <button onclick="cerrarModal()" style="
                                    background: black;
                                    color: white;
                                    border: none;
                                    padding: 10px 20px;
                                    border-radius: 5px;
                                    cursor: pointer;">Cerrar</button>
                            </div>
                        </div>
                    @endif
                    <div class="u-form u-form-1">
                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif

                        <!-- Formulario -->
                        <form action="{{ route('modifyCliente') }}"
                            class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" name="form"
                            style="padding: 10px;">
                            @csrf
                            <div class="u-form-group u-form-name">
                                <div class="u-form-select-wrapper">

                                    <!-- Titulo Cliente -->
                                    <label for="select-822a" class="u-label u-label-3" style="font-style: oblique;">Id -
                                        Cliente</label>
                                    <!-- ComboBox de Clientes -->
                                    <select id="select-822a" name="clientes"
                                        class="u-grey-80 u-input u-input-rectangle u-input-1" required>
                                        @foreach($clientes as $client)
                                        <option value="{{ $client->id_cliente }}">
                                            {{$client->id_cliente}} - {{ $client->nombre_cliente }}
                                            {{ $client->ap_cliente }}
                                            {{ $client->am_cliente }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <svg class="u-caret u-caret-svg" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px"
                                        height="16px" viewBox="0 0 16 16" style="fill:currentColor;"
                                        xml:space="preserve">
                                        <polygon class="st0" points="8,12 2,4 14,4 "></polygon>
                                    </svg>
                                </div>
                            </div>
                            <div class="u-align-center u-form-group u-form-submit">
                                <input type="submit" value="Modificar"
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
<script>
        function cerrarModal() {
            const modal = document.getElementById('modalMensaje');
            modal.style.display = 'none';
        }
</script>
</html>